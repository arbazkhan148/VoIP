<?php

namespace App\Http\Controllers\Consumer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Consumer, ConsumerPlan, User, Distributor, DistributorPlan};
use Hash;
use Session;
use DB;
use Mail;

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

        Consumer::create([
            // dd ($request->all()),
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
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

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'plan_type' => 'required|string',
            'plan_desc' => 'nullable|string',
            'custom_value' => 'nullable|string',
        ]);

        // If custom is selected, use the custom value instead of plan_desc
        $planDesc = ($request->plan_desc === 'custom') ? $request->custom_value : $request->plan_desc;

        // Insert into database
        ConsumerPlan::create([
            'user_id' => auth()->id(), // Assuming user is logged in
            'plan_type' => $request->plan_type,
            'plan_desc' => $planDesc,
            'custom_value' => $request->custom_value,
        ]);

        return redirect()->back()->with('success', 'Plan purchased successfully!');
    }

}
