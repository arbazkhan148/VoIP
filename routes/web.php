<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Distributor\DistributorController;
use App\Http\Controllers\ConsumerController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('user')->name('user')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
        Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
       // Route::get('register', [UserController::class, 'register'])->name('register');
        Route::get('profile', [UserController::class, 'profile'])->name('profile');
        Route::get('plan', [UserController::class, 'plan'])->name('user.plan');
    });
    Route::middleware(['auth:user'])->group(function () {
    });

});

Route::name('seller.')->prefix('seller')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
        Route::get('dashboard', [SellerController::class, 'dashboard'])->name('dashboard');
        Route::get('profile', [SellerController::class, 'profile'])->name('profile');
        Route::get('register', [SellerController::class, 'register'])->name('register');
        Route::get('contact', [SellerController::class, 'contact'])->name('contact');
        Route::get('distributor/list', [SellerController::class, 'distributorlist'])->name('distributorlist');
        Route::get('distributor/add', [SellerController::class, 'distributoradd'])->name('distributoradd');
        Route::get('consumer/list', [SellerController::class, 'consumerlist'])->name('consumerlist');
        Route::get('consumer/add', [SellerController::class, 'consumeradd'])->name('consumeradd');
    });
    Route::middleware(['auth:seller'])->group(function () {
        Route::get('logout', [SellerController::class, 'logout'])->name('logout');
    });
});

Route::prefix('distributor')->name('distributor')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
        Route::get('dashboard', [DistributorController::class, 'dashboard'])->name('distributor.dashboard');
        Route::get('profile', [DistributorController::class, 'profile'])->name('distributor.profile');
        Route::get('plans', [DistributorController::class, 'plans'])->name('distributor.plans');
        Route::get('register', [DistributorController::class, 'register'])->name('user.register');
        Route::post('registerPost', [DistributorController::class, 'registerPOST'])->name('distributor.registerPost');
        Route::get('contact', [DistributorController::class, 'contact'])->name('distributor.contact');
        Route::post('contactPost', [DistributorController::class, 'contactPOST'])->name('distributor.contactPost');
        Route::get('dashboard', [DistributorController::class, 'consumersList'])->name('distributor.consumersList');
        Route::post('/buy-plan', [DistributorController::class, 'store'])->name('buy.plan');

    });
    Route::middleware(['auth:distributor'])->group(function () {
        // Route::get('register', [DistributorController::class, 'register'])->name('user.register');
    });
});


