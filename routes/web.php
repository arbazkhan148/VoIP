<?php

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

Route::prefix('seller')->name('seller')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
    });
    Route::middleware(['auth:seller'])->group(function () {
    });
});

Route::prefix('distributor')->name('distributor')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
        Route::get('dashboard', [DistributorController::class, 'dashboard'])->name('distributor.dashboard');
        Route::get('profile', [DistributorController::class, 'profile'])->name('distributor.profile');
        Route::get('register', [DistributorController::class, 'register'])->name('user.register');
        Route::get('contact', [DistributorController::class, 'contact'])->name('distributor.contact');
    });
    Route::middleware(['auth:distributor'])->group(function () {
        // Route::get('register', [DistributorController::class, 'register'])->name('user.register');
    });
});


