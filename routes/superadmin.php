<?php

use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\OzamizTabledataController;
use App\Http\Controllers\PagadianProductsController;
use App\Http\Controllers\PagadianTabledataController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SuperAdmin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SuperAdmin\ProfileController;
use App\Http\Controllers\SuperadminFeedbackController;
use App\Http\Controllers\UserController;
use App\Models\PagadianTabledata;
use Illuminate\Support\Facades\Route;




Route::prefix('super-admin')->name('super-admin.')->group(function () {

    Route::middleware('guest:super_admin')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    });

    // Auth Routes
    Route::middleware('auth:super_admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('superadmin.dashboard');
        })->name('dashboard');

       
        //products
        Route::resource('products',  ProductsController::class);
        Route::resource('pagadianproducts',  PagadianProductsController::class);

        //table datas
        Route::resource('ozamiztabledatas',  OzamizTabledataController::class);
        Route::resource('pagadiantabledatas',  PagadianTabledataController::class);

        //user accounts
        Route::resource('useraccounts',  UserController::class);
       
        //feedback
        Route::resource('Feedbacks',  SuperadminFeedbackController::class);

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });
});
