<?php

namespace App\Http\Controllers\Distributor;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Consumer, ConsumerPlan, User, Distributor, DistributorPlan};
use Hash;
use Session;
use DB;
use Mail;

class DistributorController extends Controller
{
    public function register(){
        return view('futurenxt/partner_register');
    }

    public function registerPOST(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:distributors',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
        ]);

        Distributor::create([
            // dd ($request->all()),
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect('distributor/login')->with('success', 'Distributor Registered Successfully');
    }

    public function login(){
        return view('distributor.login');
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
            if (Auth::guard('distributor')->attempt($credentials)) {
                return redirect('distributor/dashboard');
            }
            return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout(){
        Session::flush();
        Auth::guard('distributor')->logout();
        return redirect('distributor/login');
    }

    public function forgot_password(){
        return view('distributor.forgot-password');
    }

    public function showProfile(){
    $user = Auth::user();
    return view('distributor/profile', compact('user'));
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


    public function dashboard(){
        $distributorid=Auth::guard('distributor')->id();
        $consumers=ConsumerPlan::where('assigned_distributor',$distributorid)->latest()->get()->each(function ($value){
            $consumer=Consumer::where('id',$value->consumer_id)->first();
            $value->first_name=$consumer->first_name;
            $value->last_name=$consumer->last_name;
            $value->phone=$consumer->phone;
            $value->email=$consumer->email;
        });
        $totalorders=count($consumers);
        $totalconsumers=count($consumers->unique('consumer_id'));
        return view('distributor.dashboard',compact('consumers','totalorders','totalconsumers'));
    }

    public function contact(){
        return view('distributor.contact');
    }

    public function profile(){
        return view('distributor.profile');
    }

    public function plans(){
        $distributorid=Auth::guard('distributor')->id();
        $voips=DistributorPlan::where('user_id',$distributorid)->where('plan_type','VoIP')->where('status','Active')->take(1)->latest()->get();
        $clouds=DistributorPlan::where('user_id',$distributorid)->where('plan_type','Cloud Storage')->where('status','Active')->take(1)->latest()->get();
        $hostings=DistributorPlan::where('user_id',$distributorid)->where('plan_type','Hosting')->where('status','Active')->take(1)->latest()->get();
        return view('distributor.plans',compact('voips','clouds','hostings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'plan_type' => 'required|string',
            'plan_option' => 'nullable|string',
            'custom_value' => 'nullable|string',
        ]);

        // Prefer custom value if present, else use plan option
        $selectedPlan = $validated['custom_value'] ?: $validated['plan_option'];

        if (!$selectedPlan) {
            return back()->with('error', 'Please select a plan or enter a custom value.');
        }

        // Save to database (optional)
        DistributorPlan::create([
            'user_id' => auth()->id(), // if user is logged in
            'plan_type' => $validated['plan_type'],
            'plan_desc' => $selectedPlan,
        ]);

        return back()->with('success', "{$validated['plan_type']} plan purchased successfully! You chose: {$selectedPlan}");
    }

    public function contactPOST(Request $request){
    }
}
