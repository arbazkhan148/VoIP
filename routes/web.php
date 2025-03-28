<?php

use App\Http\Controllers\Consumer\ConsumerController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Distributor\DistributorController;

use App\Http\Controllers\Futurenxt\FuturenxtController;


Route::get('/', function () {
    return view('futurenxt/index');
});

Route::get('/about_us', function () {
    return view('futurenxt/about_us');
});

Route::get('/contact', function () {
    return view('futurenxt/contact');
});
Route::post('/contactpost', function () {
    $data=$_POST;
    Mail::send('emails.contactEmail', ['contactData'=>$data], function ($m) use ($data)  {
        $m->to($data['email'], 'consumer')->subject('New Enquiry.!');
    });
    return back()->with('success','');
});

Route::get('/voip', function () {
    return view('futurenxt/voip');
});

Route::get('/cloud', function () {
    return view('futurenxt/cloud');
});

Route::get('/hosting', function () {
    return view('futurenxt/hosting');
});

Route::get('/user_login', function () {
    return view('futurenxt/user_login');
});

Auth::routes();

// Route::prefix('user')->name('user')->group(function(){
//     Route::middleware(['guest:web'])->group(function () {
//     //     Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
//     //    // Route::get('register', [UserController::class, 'register'])->name('register');
//     //     Route::get('profile', [UserController::class, 'profile'])->name('profile');
//     //    // Route::get('plan', [UserController::class, 'plan'])->name('user.plan');
//     // });
//     Route::middleware(['auth:user'])->group(function () {
//     });

// });

Route::prefix('consumer')->name('consumer')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
       Route::get('register', [ConsumerController::class, 'register'])->name('register');
       Route::post('registerPost', [ConsumerController::class, 'registerPOST'])->name('consumer.registerPost');
       Route::get('login', [ConsumerController::class, 'login'])->name('consumer.login');
       Route::post('loginPost', [ConsumerController::class, 'loginPOST'])->name('consumer.loginPost');
       Route::get('forgot-password', [ConsumerController::class, 'forgotpassword'])->name('consumer.forgot-password');
       Route::post('forgot-password-post', [ConsumerController::class, 'forgot_password_post'])->name('consumer.forgot-password-post');
       Route::get('reset-password/{token}', [ConsumerController::class, 'showResetPasswordForm'])->name('consumer.reset.password.get');
       Route::post('reset-password', [ConsumerController::class, 'submitResetPasswordForm'])->name('consumer.reset.password.post');
    });
    Route::middleware(['auth:consumer'])->group(function () {
       Route::get('dashboard', [ConsumerController::class, 'dashboard'])->name('dashboard');
       Route::post('logout', [ConsumerController::class, 'logout'])->name('distributor.logout');
       Route::get('profile', [ConsumerController::class, 'profile'])->name('profile');
       Route::get('contact', [ConsumerController::class, 'contact'])->name('contact');
       Route::post('buy-plan', [ConsumerController::class, 'buyPlan'])->name('consumer.buy.plan');
       Route::get('profile', [ConsumerController::class, 'showProfile'])->name('consumer.profile');
       Route::put('profile/update', [ConsumerController::class, 'updateProfile'])->name('profile.update');
       Route::post('change-password', [ConsumerController::class, 'changePassword'])->name('consumer.change-password');
        Route::post('contactPost', [ConsumerController::class, 'contactPOST'])->name('consumer.contactPost');

    });

});

Route::name('seller.')->prefix('seller')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
        Route::get('login', [SellerController::class, 'login'])->name('login');
        Route::post('authenticate', [SellerController::class, 'authenticate'])->name('authenticate');
    });
    Route::middleware(['auth:seller'])->group(function () {
        Route::get('profile', [SellerController::class, 'profile'])->name('profile');
        Route::put('profile/update', [SellerController::class, 'updateProfile'])->name('profile.update');
        Route::post('change-password', [SellerController::class, 'changePassword'])->name('change-password');
        Route::get('distributor/add', [SellerController::class, 'distributoradd'])->name('distributoradd');
        Route::get('dashboard', [SellerController::class, 'dashboard'])->name('dashboard');
        Route::get('distributor/list', [SellerController::class, 'distributorlist'])->name('distributorlist');
        Route::post('distributor/store', [SellerController::class, 'distributorstore'])->name('distributorstore');
        Route::get('distributor/edit/{id}', [SellerController::class, 'distributoredit'])->name('distributoredit');
        Route::post('distributor/update/{id}', [SellerController::class, 'distributorupdate'])->name('distributorupdate');
        Route::get('distributor/plandetails/{id}', [SellerController::class, 'distributorplandtl'])->name('distributorplandtl');
        Route::post('distributor/plandetails/{id}/approve', [SellerController::class, 'distributorplanapprove'])->name('distributorplanapprove');
        Route::post('distributor/plandetails/{id}/reject', [SellerController::class, 'distributorplanreject'])->name('distributorplanreject');
        Route::get('distributorplans/list', [SellerController::class, 'distributorplanslist'])->name('distributorplanslist');
        Route::get('consumer/list', [SellerController::class, 'consumerlist'])->name('consumerlist');
        Route::get('consumer/add', [SellerController::class, 'consumeradd'])->name('consumeradd');
        Route::post('consumer/store', [SellerController::class, 'consumerstore'])->name('consumerstore');
        Route::get('consumer/edit/{id}', [SellerController::class, 'consumeredit'])->name('consumeredit');
        Route::post('consumer/update/{id}', [SellerController::class, 'consumerupdate'])->name('consumerupdate');
        Route::get('consumer/plandetails/{id}', [SellerController::class, 'consumerplandtl'])->name('consumerplandtl');
        Route::post('consumer/plandetails/{id}/approve', [SellerController::class, 'consumerplanapprove'])->name('consumerplanapprove');
        Route::get('consumerplans/list', [SellerController::class, 'consumerplanslist'])->name('consumerplanslist');
        Route::get('consumerplans/view/{id}', [SellerController::class, 'consumerplansview'])->name('consumerplansview');
        Route::get('logout', [SellerController::class, 'logout'])->name('logout');
    });
});

Route::prefix('distributor')->name('distributor')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
        Route::get('register', [DistributorController::class, 'register'])->name('partner.register');
        Route::post('registerPost', [DistributorController::class, 'registerPOST'])->name('distributor.registerPost');
        Route::get('login', [DistributorController::class, 'login'])->name('distributor.login');
        Route::post('loginPost', [DistributorController::class, 'loginPOST'])->name('distributor.loginPost');
        Route::get('forgot-password', [DistributorController::class, 'forgot_password'])->name('distributor.forgot-password');
        Route::post('forgot-password-post', [DistributorController::class, 'forgot_password_post'])->name('distributor.forgot-password-post');
        Route::get('reset-password/{token}', [DistributorController::class, 'showResetPasswordForm'])->name('consumer.reset.password.get');
        Route::post('reset-password', [DistributorController::class, 'submitResetPasswordForm'])->name('consumer.reset.password.post');
    });

    Route::middleware(['auth:distributor'])->group(function () {
        Route::get('dashboard', [DistributorController::class, 'dashboard'])->name('distributor.dashboard');
        Route::get('profile', [DistributorController::class, 'profile'])->name('distributor.profile');
        Route::get('plans', [DistributorController::class, 'plans'])->name('distributor.plans');
        Route::get('contact', [DistributorController::class, 'contact'])->name('distributor.contact');
        Route::post('contactPost', [DistributorController::class, 'contactPOST'])->name('distributor.contactPost');
        Route::post('buy-plan', [DistributorController::class, 'store'])->name('buy.plan');
        Route::get('profile', [DistributorController::class, 'showProfile'])->name('distributor.profile');
        Route::put('profile/update', [DistributorController::class, 'updateProfile'])->name('profile.update');
        Route::post('change-password', [DistributorController::class, 'changePassword'])->name('distributor.change-password');
        Route::get('logout', [DistributorController::class, 'logout'])->name('distributor.logout');
        Route::post('consumer/plans/{id}/approve', [DistributorController::class, 'planapprove'])->name('cplanapprove');
        Route::get('consumer/list', [DistributorController::class, 'consumerlist'])->name('consumerlist');
        Route::get('consumer/dplandetails/{id}', [DistributorController::class, 'consumerplandtl'])->name('distributor.dconsumerplandtl');
    });
});