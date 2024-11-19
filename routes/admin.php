<?php

use App\Http\Controllers\AdminOrderingsController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\AdminOrderingController;
use App\Http\Controllers\AdminReservationController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');    

        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    });

    // Auth Routes
    Route::middleware('auth:admin')->group(function () {
        //ozamiz admin
        Route::get('ozamiz/dashboard', function () {
            return view('admin.content.ozamiz.dashboard')
                ->with('sidebar', view('admin.layouts.partials.sidebar'));
        })->name('dashboard');

        Route::resource('ozamiz/orders',  AdminOrderingsController::class);
        //Route::resource('ozamiz/reservations',  AdminReservationController::class);


        Route::get('ozamiz/tablereservation', function () {
            return view('admin.content.ozamiz.tablereservation')
                ->with('sidebar', view('admin.layouts.partials.sidebar'));
        })->name('tablereservation');

        Route::get('ozamiz/feedback', function () {
            return view('admin.content.ozamiz.feedback')
                ->with('sidebar', view('admin.layouts.partials.sidebar'));
        })->name('feedback');

        Route::get('ozamiz/notification', function () {
            return view('admin.content.ozamiz.notification')
                ->with('sidebar', view('admin.layouts.partials.sidebar'));
        })->name('notification');


        //pagadian
        Route::get('pagadian/dashboard', function () {
            return view('admin.content.pagadian.dashboard')
                ->with('sidebar', view('admin.layouts.partials.pagadiansidebar'));
        })->name('pagadiandashboard');

        Route::get('pagadian/orders', function () {
            return view('admin.content.pagadian.orders')
                ->with('sidebar', view('admin.layouts.partials.pagadiansidebar'));
        })->name('pagadianorders');

        Route::get('pagadian/tablereservation', function () {
            return view('admin.content.pagadian.tablereservation')
                ->with('sidebar', view('admin.layouts.partials.pagadiansidebar'));
        })->name('pagadiantablereservation');

        Route::get('pagadian/feedback', function () {
            return view('admin.content.pagadian.feedback')
                ->with('sidebar', view('admin.layouts.partials.pagadiansidebar'));
        })->name('pagadianfeedback');

        Route::get('pagadian/notification', function () {
            return view('admin.content.pagadian.notification')
                ->with('sidebar', view('admin.layouts.partials.pagadiansidebar'));
        })->name('pagadiannotification');

        

        //staff admin
        Route::get('orders', function(){
            return view('admin.datas.orders.orders');
        });

        Route::get('reservations', function(){
            return view('admin.datas.orders.reservations');
        });

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });
});
