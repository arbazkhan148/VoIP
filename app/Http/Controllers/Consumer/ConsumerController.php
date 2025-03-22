<?php

namespace App\Http\Controllers\Consumer;

use App\Http\Controllers\Controller;
use App\Models\Consumer;

use Illuminate\Http\Request;

class ConsumerController
{
    public function register(){
        $data=[];
        Consumer::create($data);
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


    public function registerpost(Request $request){
        // dd($request->all());
        consumer::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password,

            'custom_input'=>$request->custom_input,
        ]);
        return redirect()->back()->with('success', 'Consumer Registered Successfully');
    }


}
