<?php

namespace App\Http\Controllers\Distributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,Distributor,DistributorPlan};
use Hash;
use Auth;
use Session;
use DB;
use Mail;

class DistributorController extends Controller
{
    public function login(){
        return view('distributor.login');
    }

    public function loginPost(Request $request){
        // dd($request->all());

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

    public function dashboard(){
        return view('distributor.dashboard');
    }

    public function register(){
        return view('distributor.register');
    }

    public function contact(){
        return view('distributor.contact');
    }

    public function profile(){
        return view('distributor.profile');
    }

    public function plans(){
        return view('distributor.plans');
    }

    // public function registerPOST(Request $request){
    //     // dd($request->all());
    //     User::create([
    //         'first_name'=>$request->first_name,
    //         'last_name'=>$request->last_name,
    //         'phone'=>$request->phone,
    //         'email'=>$request->email,
    //         'password'=>$request->password,
    //         'plan_type'=>$request->plan_type,
    //         'plan_desc'=>$request->plan_desc,
    //         'custom_input'=>$request->custom_input,
    //     ]);
    //     return redirect()->back()->with('success', 'Consumer Registered Successfully');
    // }

    // public function consumersList(){
    //     $users = User::orderBy('created_at', 'desc')->get(); // Pull all registered users
    //     return view('distributor.dashboard', compact('users'));

    // }

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
