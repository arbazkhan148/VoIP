<?php

namespace App\Http\Controllers\Consumer;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Consumer, ConsumerPlan, User, Distributor, DistributorPlan};
use Hash;
use Illuminate\Support\Str;
use Session;

class ConsumerController
{
    public function register(){
        return view('futurenxt.user_register');
    }

    public function registerPOST(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:consumers',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
        ]);

        $consumer=Consumer::create([
            // dd ($request->all()),
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Mail::send('emails.consumerRegister', ['consumer'=>$consumer], function ($m) use ($consumer)  {
            $m->to($consumer->email, 'consumer')->subject('Registration Successfull.!');
        });

        return redirect('consumer/login')->with('success', 'Consumer Registered Successfully');

    }

    public function login(){
        return view('consumer/login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'Email cannot exceed 255 characters.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.max' => 'Password cannot exceed 20 characters.',
        ]);
            $credentials = $request->only('email', 'password');
            if (Auth::guard('consumer')->attempt($credentials)) {
                return redirect('consumer/dashboard');
            }
            return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout(Request $request){
    Auth::guard('consumer')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('consumer/login');
    }

    public function forgot_password(){
        return view('consumer.forgot-password');
    }

    public function dashboard(){
        return view('consumer.dashboard');
    }

    public function profile(){
        return view('consumer/profile');
    }

    public function showProfile(){
    $user = auth()->guard('consumer')->user(); // Important: use the correct guard!
    if (!$user) {
        // User not logged in or invalid guard.
        return redirect()->url('consumer/login')->with('error', 'Please login first.');
    }
    return view('consumer.profile', compact('user'));
    }

    public function contact(){
        return view('consumer.contact');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        $consumer = Auth::guard('consumer')->user();

        if (!Hash::check($request->current_password, $consumer->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        $consumer->password = Hash::make($request->new_password);
        $consumer->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }
    public function forgotpassword(){
        return view('consumer.forgot-password');
    }
    public function forgot_password_post(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:consumers',
        ]);
        $token = Str::random(64);
        $consumer=Consumer::where('email',$request->email)->first();
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $resetlink=url('consumer/reset-password/'.$token);
        Mail::send('emails.forgotPassword', ['token' => $token,'user'=>$consumer,'resetLink'=>$resetlink], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        return back()->with('success', 'We have e-mailed your password reset link!');
    }
    public function showResetPasswordForm($token) {
        return view('consumer.forgetPasswordLink', ['token' => $token]);
    }
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:consumers',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();
        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }
        $user = Consumer::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
        DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();
        return redirect('consumer/login')->with('success', 'Your password has been changed!');
    }
    public function updateProfile(Request $request)
    {
       $user = Auth::user();

       $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'phone'      => 'required|string|max:20',
            'email'      => 'required|email|unique:users,email,' . $user->id,
       ]);

       $user->first_name = $validatedData['first_name'];
       $user->last_name  = $validatedData['last_name'];
       $user->phone      = $validatedData['phone'];
       $user->email      = $validatedData['email'];

       $user->save();
       return redirect()->back()->with('success', 'Profile updated successfully!');
   }

    public function buyPlan(Request $request)
    {
        $validatedData = $request->validate([
            'plan_type'   => 'required|string|max:255',
            'plan_desc'   => 'nullable|string|max:255',
            'custom_value'=> 'nullable|string|max:255',
        ]);

        // Determine the final plan description (custom overrides)
        $finalPlanDesc = $validatedData['plan_desc'] === 'custom'
            ? strtoupper($validatedData['custom_value']) // custom_value in uppercase
            : $validatedData['plan_desc'];

        // Save to consumer_plans table
        ConsumerPlan::create([
            'user_id'      => Auth::id(), // Current logged-in consumer
            'plan_type'    => $validatedData['plan_type'],
            'plan_desc'    => $finalPlanDesc,
            'custom_value' => $validatedData['plan_desc'] === 'custom' ? strtoupper($validatedData['custom_value']) : null,
        ]);

        return redirect()->back()->with('success', 'Plan purchased successfully!');
    }
    public function contactPOST(Request $request)
    {
        $data=$request->all();
        Mail::send('emails.contactEmail', ['contactData'=>$data], function ($m) use ($data)  {
            $m->to($data['email'], 'consumer')->subject('New Enquiry.!');
        });
        return back()->with('success','Enquiry Sent successfully.');
    }
}
