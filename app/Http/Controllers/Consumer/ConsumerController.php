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
        return view('consumer.login');
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

    public function logout(){
        Session::flush();
        Auth::guard('consumer')->logout();
        return redirect('consumer/login');
    }

    public function forgot_password(){
        return view('consumer.forgot-password');
    }


    public function dashboard(){
        return view('consumer.dashboard');
    }

    public function profile(){

        return view('consumer.profile');
    }

    public function contact(){
        return view('consumer.contact');
    }

}
