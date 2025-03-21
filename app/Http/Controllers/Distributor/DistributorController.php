<?php

namespace App\Http\Controllers\Distributor;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{User,Distributor,DistributorPlan};
use Hash;
use Session;
use DB;
use Mail;

class DistributorController extends Controller
{

    public function login(){
        return view('distributor.login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'Email cannot exceed 255 characters.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.max' => 'Password cannot exceed 20 characters.',
        ]);
            $credentials = $request->only('email', 'password');
            if (Auth::guard('distributor')->attempt($credentials)) {
                return redirect('distributor/dashboard');
            }
            return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('distributor/login');
    }

    public function showProfile(){
    $user = Auth::user();
    return view('distributor/profile', compact('user'));
    }

     // Update the profile details
     public function updateProfile(Request $request)
     {
        $user = Auth::user(); // Get logged-in user

         // Validate input data
        $validatedData = $request->validate([
             'first_name' => 'required|string|max:255',
             'last_name'  => 'required|string|max:255',
             'phone'      => 'required|string|max:20',
             'email'      => 'required|email|unique:users,email,' . $user->id, // ignore the current user's email
        ]);

         // Update the user's info
        $user->first_name = $validatedData['first_name'];
        $user->last_name  = $validatedData['last_name'];
        $user->phone      = $validatedData['phone'];
        $user->email      = $validatedData['email'];

        $user->save(); // Save the updated info in the database

        return redirect()->url('distributor/profile')->with('success', 'Profile updated successfully!');
    }

    public function changePassword(Request $request)
    {
        // Validate incoming data
        // Validate the request fields
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Get the currently authenticated distributor
        $distributors = Auth::guard('distributor')->user();

        // Verify current password
        if (!Hash::check($request->current_password, $distributors->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // Update the password
        $distributors->password = Hash::make($request->new_password);
        $distributors->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }


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

    // public function registerPOST(Request $request){
    //     // dd($request->all());
    //     User::create([
    //         'first_name'=>$request->first_name,
    //         'last_name'=>$request->last_name,
    //         'phone'=>$request->phone,
    //         'email'=>$request->email,
    //         'password'=>$request->password,
    //         'plan_type'=>$request->plan_type,
    //         'plan_desc'=>$request->plan_desc,
    //         'custom_input'=>$request->custom_input,
    //     ]);
    //     return redirect()->back()->with('success', 'Consumer Registered Successfully');
    // }

    // public function consumersList(){
    //     $users = User::orderBy('created_at', 'desc')->get(); // Pull all registered users
    //     return view('distributor.dashboard', compact('users'));

    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'plan_type' => 'required|string',
            'plan_option' => 'nullable|string',
            'custom_value' => 'nullable|string',
        ]);

        // Prefer custom value if present, else use plan option
        $selectedPlan = $validated['custom_value'] ?: $validated['plan_option'];

        if (!$selectedPlan) {
            return back()->with('error', 'Please select a plan or enter a custom value.');
        }

        // Save to database (optional)
        DistributorPlan::create([
            'user_id' => auth()->id(), // if user is logged in
            'plan_type' => $validated['plan_type'],
            'plan_desc' => $selectedPlan,
        ]);

        return back()->with('success', "{$validated['plan_type']} plan purchased successfully! You chose: {$selectedPlan}");
    }

    public function contactPOST(Request $request){
    }
}
