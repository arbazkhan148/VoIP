<?php

namespace App\Http\Controllers\Distributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
