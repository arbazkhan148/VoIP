<?php

namespace App\Http\Controllers\Distributor;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Consumer, ConsumerPlan, User, Distributor, DistributorPlan};
use Hash;
use Illuminate\Support\Str;
use Session;
use DB;

class DistributorController extends Controller
{
    public function register()
    {
        return view('futurenxt/partner_register');
    }

    public function registerPOST(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:distributors',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
        ]);

        $distributor=Distributor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Mail::send('emails.distributorRegister', ['distributor'=>$distributor], function ($m) use ($distributor)  {
            $m->to($distributor->email, 'consumer')->subject('Registration Successfull.!');
        });
        return redirect('distributor/login')->with('success', 'Distributor Registered Successfully');
    }

    public function login()
    {
        return view('distributor.login');
    }

    public function loginPost(Request $request)
    {
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
        if (Auth::guard('distributor')->attempt($credentials)) {
            return redirect('distributor/dashboard');
        }
        return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout(Request $request)
    {
        Auth::guard('distributor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('distributor/login');
    }

    public function forgot_password()
    {
        return view('distributor.forgot-password');
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('distributor/profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];
        $user->save();
        return redirect()->url('distributor/profile')->with('success', 'Profile updated successfully!');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        $distributors = Auth::guard('distributor')->user();

        if (!Hash::check($request->current_password, $distributors->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        $distributors->password = Hash::make($request->new_password);
        $distributors->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }


    public function dashboard()
    {
        $distributorid = Auth::guard('distributor')->id();
        $consumersp = ConsumerPlan::where('assigned_distributor', null)->where('status', 'Pending')->latest()->get()->each(function ($value) {
            $consumer = Consumer::where('id', $value->user_id)->first();
            $value->first_name = $consumer->first_name;
            $value->last_name = $consumer->last_name;
            $value->phone = $consumer->phone;
            $value->email = $consumer->email;
        });
        $consumers = ConsumerPlan::where('assigned_distributor', $distributorid)->latest()->get()->each(function ($value) {
            $consumer = Consumer::where('id', $value->user_id)->first();
            $value->first_name = $consumer->first_name;
            $value->last_name = $consumer->last_name;
            $value->phone = $consumer->phone;
            $value->email = $consumer->email;
        });
        $totalorders = count($consumers);
        $totalconsumers = count($consumers->unique('user_id'));
        return view('distributor.dashboard', compact('consumers', 'totalorders', 'totalconsumers', 'consumersp'));
    }

    public function contact()
    {
        return view('distributor.contact');
    }

    public function profile()
    {
        return view('distributor.profile');
    }

    public function plans()
    {
        $distributorid = Auth::guard('distributor')->id();
        $voips = DistributorPlan::where('user_id', $distributorid)->where('plan_type', 'VoIP')->where('status', 'Active')->take(1)->latest()->get();
        $clouds = DistributorPlan::where('user_id', $distributorid)->where('plan_type', 'Cloud Storage')->where('status', 'Active')->take(1)->latest()->get();
        $hostings = DistributorPlan::where('user_id', $distributorid)->where('plan_type', 'Hosting')->where('status', 'Active')->take(1)->latest()->get();
        return view('distributor.plans', compact('voips', 'clouds', 'hostings'));
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
        $distributor=DistributorPlan::create([
            'user_id' => auth()->id(), // Assuming user is logged in
            'plan_type' => $request->plan_type,
            'plan_desc' => $planDesc,
            'custom_value' => $request->custom_value,
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

    public function planapprove(Request $request, $id)
    {
        $consumerplan = ConsumerPlan::where('id', $id)->first();
        $status = "Approved";
        $consumerplan->status1 = $status;
        $consumerplan->save();
        return back()->with('success', 'Plan ' . $status . ' successfully.');
    }

    public function consumerlist()
    {
        $distributorid = Auth::guard('distributor')->id();
        $consumers = ConsumerPlan::where('assigned_distributor', $distributorid)->latest()->get()->each(function ($value) {
            $consumer = Consumer::where('id', $value->user_id)->first();
            $value->first_name = $consumer->first_name;
            $value->last_name = $consumer->last_name;
            $value->phone = $consumer->phone;
            $value->email = $consumer->email;
        });
        return view('distributor.consumerlist', compact('consumers'));
    }
    public function consumerplandtl($id)
    {
        $consumer = Consumer::where('id', $id)->first();
        $consumerplan = ConsumerPlan::where('user_id', $id)->latest()->get()->each(function ($value) {
            if (!empty($value->assigned_distributor)) {
                $distributor = Distributor::where('id', $value->assigned_distributor)->first();
                $value->distributor = $distributor->first_name . ' ' . $distributor->last_name . "(" . $distributor->phone . ")";
            }
        });
        return view('distributor.consumerplans', compact('consumer', 'consumerplan'));
    }
    public function forgot_password_post(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:distributors',
        ]);
        $token = Str::random(64);
        $consumer=Distributor::where('email',$request->email)->first();
        \Illuminate\Support\Facades\DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $resetlink=url('distributor/reset-password/'.$token);
        Mail::send('emails.forgotPassword', ['token' => $token,'user'=>$consumer,'resetLink'=>$resetlink], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        return back()->with('success', 'We have e-mailed your password reset link!');
    }
    public function showResetPasswordForm($token) {
        return view('distributor.forgetPasswordLink', ['token' => $token]);
    }
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:distributors',
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
        $user = Distributor::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
        DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();
        return redirect('distributor/login')->with('success', 'Your password has been changed!');
    }
}