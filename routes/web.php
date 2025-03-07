<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Distributor\DistributorController;
use App\Http\Controllers\Consumer\ConsumerController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('user')->name('user')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
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
        Route::get('contact', [DistributorController::class, 'contact'])->name('distributor.contact');
    });
    Route::middleware(['auth:distributor'])->group(function () {
        // Route::get('register', [DistributorController::class, 'register'])->name('user.register');
    });
});


