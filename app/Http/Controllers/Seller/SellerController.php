<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Consumer;
use App\Models\ConsumerPlan;
use App\Models\Distributor;
use App\Models\DistributorPlan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class SellerController extends Controller
{
    public function login(){
        return view('seller.login');
    }
    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('seller')->attempt($credentials)) {
            return redirect('seller/dashboard');
        }
        return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout(){
        Session::flush();
        Auth::guard('seller')->logout();
        return redirect('seller/login');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:sellers,email,' . $user->id,
        ]);

        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];
        $user->save();

        return redirect()->back();
    }

    public function dashboard(){
        $total_distributors=Distributor::count();
        $total_consumers=Consumer::count();
        $distributorplan=DistributorPlan::where('status','Pending')->latest()->get()->each(function ($value){
            $distributor=Distributor::where('id',$value->user_id)->first();
            $value->name=$distributor->first_name.' '.$distributor->last_name;
            $value->phone=$distributor->phone;
        });
        $consumerplan=ConsumerPlan::where('status','Pending')->latest()->get()->each(function ($value){
            $consumer=Consumer::where('id',$value->user_id)->first();
            $value->name=$consumer->first_name.' '.$consumer->last_name;
            $value->phone=$consumer->phone;
        });
        return view('seller.dashboard',compact('total_distributors','total_consumers','distributorplan','consumerplan'));
    }

    public function register(){
        return view('seller.register');
    }

    public function contact(){
        return view('seller.contact');
    }

    public function profile(){
        $user = Auth::guard('seller')->user();
        return view('seller.profile',compact('user'));
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
        'password'=>Hash::make($request->password),'status'=>'Approved']);

        Mail::send('emails.distributorRegister', ['distributor'=>$distributor], function ($m) use ($distributor)  {
            $m->to($distributor->email, 'consumer')->subject('Registration Successfull.!');
        });
        return redirect()->route('seller.distributorlist')->with('success','Distributor added successfully.');
    }

    public function distributoredit($id){
        $distributor=Distributor::where('id',$id)->first();
        return view('seller.distributoredit',compact('distributor'));
    }

    public function distributorupdate(Request $request,$id){
        $request->validate([
            'email'=>'required|unique:distributors,email,' . $id,
        ]);
        $distributor=Distributor::where('id',$id)->update(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'phone'=>$request->phone,'email'=>$request->email]);
        return redirect()->route('seller.distributorlist')->with('success','Distributor updated successfully.');
    }

    public function distributorplandtl($id){
        $distributor=Distributor::where('id',$id)->first();
        $distributorplan=DistributorPlan::where('user_id',$id)->latest()->get();
        return view('seller.distributorplans',compact('distributor','distributorplan'));
    }

    public function distributorplanapprove($id){
        $distributorplan=DistributorPlan::where('id',$id)->first();
        $distributorplan->status="Active";
        $distributorplan->save();
        return back()->with('success','Plan Approved successfully.');
    }

    public function distributorplanreject($id){
        $distributorplan=DistributorPlan::where('id',$id)->first();
        $distributorplan->status="Reject";
        $distributorplan->save();
        return back()->with('success','Plan Rejected successfully.');
    }

    public function distributorplanslist(){
        $distributorplan=DistributorPlan::where('status','Pending')->latest()->get()->each(function ($value){
            $distributor=Distributor::where('id',$value->user_id)->first();
            $value->name=$distributor->first_name.' '.$distributor->last_name;
            $value->phone=$distributor->phone;
        });
        return view('seller.distributorplanslist',compact('distributorplan'));
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
            'password'=>Hash::make($request->password)]);

        Mail::send('emails.consumerRegister', ['consumer'=>$consumer], function ($m) use ($consumer)  {
            $m->to($consumer->email, 'consumer')->subject('Registration Successfull.!');
        });
        return redirect()->route('seller.consumerlist')->with('success','Consumer added successfully.');
    }

    public function consumeredit($id){
        $consumer=Consumer::where('id',$id)->first();
        return view('seller.consumeredit',compact('consumer'));
    }

    public function consumerupdate(Request $request,$id){
        $request->validate([
            'email'=>'required|unique:consumers,email,' . $id,
        ]);
        $consumer=Consumer::where('id',$id)->update(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'phone'=>$request->phone,'email'=>$request->email]);
        return redirect()->route('seller.consumerlist')->with('success','Consumer updated successfully.');
    }

    public function consumerplandtl($id){
        $consumer=Consumer::where('id',$id)->first();
        $consumerplan=ConsumerPlan::where('user_id',$id)->latest()->get()->each(function ($value){
            if(!empty($value->assigned_distributor)){
                $distributor=Distributor::where('id',$value->assigned_distributor)->first();
                $value->distributor=$distributor->first_name.' '.$distributor->last_name."(".$distributor->phone.")";
            }
        });
        return view('seller.consumerplans',compact('consumer','consumerplan'));
    }

    public function consumerplanslist(){
        $consumerplan=ConsumerPlan::where('status','Pending')->latest()->get()->each(function ($value){
            $consumer=Consumer::where('id',$value->user_id)->first();
            $value->name=$consumer->first_name.' '.$consumer->last_name;
            $value->phone=$consumer->phone;
        });
        return view('seller.consumerplanslist',compact('consumerplan'));
    }

    public function consumerplansview($id){
        $consumerplan=ConsumerPlan::where('id',$id)->first();
        $consumer=Consumer::where('id',$consumerplan->user_id)->first();
        $distributors=Distributor::where('status','Approved')->get();
        return view('seller.consumerplanview',compact('consumer','consumerplan','distributors'));
    }

    public function consumerplanapprove(Request $request,$id){
        $consumerplan=ConsumerPlan::where('id',$id)->first();
        $status="Rejected";
        if($request->status=="Active"){
            $consumerplan->assigned_distributor=$request->assigned_distributor;
            $status="Approved";
        }
        $consumerplan->status=$request->status;
        $consumerplan->save();
        return back()->with('success','Plan '.$status.' successfully.');
    }

    public function changePassword(Request $request)
    {
        // Validate incoming data
        // Validate the request fields
        $request->validate([
            'current_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8|different:current_password',
        ]);

        // Get the currently authenticated distributor
        $seller = Auth::guard('seller')->user();

        // Verify current password
        if (!Hash::check($request->current_password, $seller->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // Update the password
        $seller->password = Hash::make($request->new_password);
        $seller->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }

}
