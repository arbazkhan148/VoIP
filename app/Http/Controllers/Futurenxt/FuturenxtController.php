<?php

namespace App\Http\Controllers\futurenxt;

use App\Models\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FuturenxtController
{
    public function index(){

        return view('futurenxt.index');
    }
    public function userregister(){

        return view('futurenxt.userregister');
    }
    public function userlogin(){

        return view('futurenxt.userlogin');

    }
    public function contact(){

        return view('futurenxt.contact');
    }
    public function partnerregister(){

        return view('futurenxt.partnerregister');
    }
    public function partnerlogin(){

        return view('futurenxt.partnerlogin');
       }
    public function aboutus(){
        return view('futurenxt.aboutus');
    }
    public function pricing(){
        return view('futurenxt.pricing');
    }
    public function features(){
        return view('futurenxt.features');
    }
    public function domain(){
        return view('futurenxt.domain');
    }
    public function userregister_api(Request $request){
        $check=Consumer::where('phone',$request->phone)->orwhere('email',$request->email)->get();
        if(count($check)>0){
            return 0;
            exit();
        }
        $consumer=Consumer::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'phone'=>$request->phone,'email'=>$request->email,
            'password'=>Hash::make($request->password),'status'=>'Approved']);
        return 1;
        exit();
    }
}
