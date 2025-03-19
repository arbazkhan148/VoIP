<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\DistributorPlan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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
        $distributors=Distributor::get();
        return view('seller.distributorlist',compact('distributors'));
    }
    public function distributoradd(){
        return view('seller.distributoradd');
    }
    public function distributorstore(Request $request){
        $distributor=Distributor::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'phone'=>$request->phone,'email'=>$request->email,
        'password'=>Hash::make($request->password),'plan_type'=>$request->plan_type,'plan_desc'=>$request->plan_desc,'status'=>'Approved']);
        DistributorPlan::create([
            'distributor_id'=>$distributor->id,
            'plan_type'=>$distributor->plan_type,
            'plan_desc'=>$distributor->plan_desc,
            'status'=>'Active',
            'date'=>date('Y-m-d'),
        ]);
        return redirect()->route('seller.distributorlist')->with('success','Distributor added successfully.');
    }
    public function distributorplandtl($id){
        $distributor=Distributor::where('id',$id)->first();
        $distributorplan=DistributorPlan::where('distributor_id',$id)->latest()->get();
        return view('seller.distributorplans',compact('distributor','distributorplan'));
    }
    public function consumerlist(){
        return view('seller.consumerlist');
    }
    public function consumeradd(){
        return view('seller.consumeradd');
    }

}
