<?php

namespace App\Http\Controllers\Distributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use DB;
use Mail;

class DistributorController extends Controller
{
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

    public function registerPOST(Request $request){
        // dd($request->all());
        User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password,
            'plan_type'=>$request->plan_type,
            'plan_desc'=>$request->plan_desc,
            'custom_input'=>$request->custom_input,
        ]);
        return redirect()->back()->with('success', 'Consumer Registered Successfully');
    }

    public function contactPOST(Request $request){
    }
}
