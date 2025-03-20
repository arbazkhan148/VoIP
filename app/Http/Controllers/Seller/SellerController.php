<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Consumer;
use App\Models\ConsumerPlan;
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
        $distributors=Distributor::latest()->get();
        return view('seller.distributorlist',compact('distributors'));
    }
    public function distributoradd(){
        return view('seller.distributoradd');
    }
    public function distributorstore(Request $request){
        $request->validate([
            'email'=>'required|unique:distributors'
        ]);
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
        $consumers=Consumer::latest()->get();
        return view('seller.consumerlist',compact('consumers'));
    }
    public function consumeradd(){
        return view('seller.consumeradd');
    }
    public function consumerstore(Request $request){
        $request->validate([
            'email'=>'required|unique:consumers'
        ]);
        $consumer=Consumer::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'phone'=>$request->phone,'email'=>$request->email,
            'password'=>Hash::make($request->password),'plan_type'=>$request->plan_type,'plan_desc'=>$request->plan_desc,'status'=>'Approved']);
        ConsumerPlan::create([
            'consumer_id'=>$consumer->id,
            'plan_type'=>$consumer->plan_type,
            'plan_desc'=>$consumer->plan_desc,
            'status'=>'Active',
            'date'=>date('Y-m-d'),
            'assigned_distributor'=>$request->assigned_distributor,
        ]);
        return redirect()->route('seller.consumerlist')->with('success','Consumer added successfully.');
    }
    public function consumerplandtl($id){
        $consumer=Consumer::where('id',$id)->first();
        $consumerplan=ConsumerPlan::where('consumer_id',$id)->latest()->get();
        return view('seller.consumerplans',compact('consumer','consumerplan'));
    }
}
