<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Consumer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        $data=[];
        Consumer::create($data);
    }
    public function dashboard(){
        return view('user.dashboard');
    }

    public function profile(){

        return view('user.profile');
    }
    public function plan(){
        return view('user.plan');
    }
}
