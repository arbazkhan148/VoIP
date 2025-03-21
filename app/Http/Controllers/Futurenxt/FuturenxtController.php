<?php

namespace App\Http\Controllers\futurenxt;

use Illuminate\Http\Request;

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
}
