<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function dashboard(){
        return view('seller.dashboard');
    }

    public function register(){
        return view('seller.register');
    }

    public function contact(){
        return view('seller.contact');
    }

    public function profile(){
        return view('seller.profile');
    }
    public function distributorlist(){
        return view('seller.distributorlist');
    }
    public function distributoradd(){
        return view('seller.distributoradd');
    }
    public function consumerlist(){
        return view('seller.consumerlist');
    }
}
