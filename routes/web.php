<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
//navigation
Route::view('/home', 'frontend.index')->name('home');



Route::view('/reservation', 'frontend.reservation')->name('reservation');
Route::view('/catering', 'frontend.catering')->name('catering');
Route::view('/location', 'frontend.location')->name('location');

//menuBranches
Route::group(['prefix' => 'menu'], function() {
    // Define a route for menu that leads to a method, if needed.
    Route::get('/', [LocationController::class, 'menu'])->name('menu'); // Optional: Define a menu route

    // Group for Ozamiz menu routes
    Route::group(['prefix' => 'ozamiz'], function() {
         // Accessed via menu/ozamiz
        Route::get('/ramen', [LocationController::class, 'ramen'])->name('menu.ramen');
        Route::get('/susshi', [LocationController::class, 'susshi'])->name('menu.susshi'); // Accessed via menu/ozamiz/susshi
        Route::get('/sasshimi', [LocationController::class, 'sasshimi'])->name('menu.sasshimi');
        Route::get('/desserts', [LocationController::class, 'desserts'])->name('menu.desserts');
        Route::get('/drinks', [LocationController::class, 'drinks'])->name('menu.drinks');
    });

    // Group for Pagadian menu routes
    Route::group(['prefix' => 'pagadian'], function() {
        // Accessed via menu/pagadian
        Route::get('/ramen', [LocationController::class, 'pagadianramen'])->name('menu.pagadian.ramen');
        Route::get('/susshi', [LocationController::class, 'pagadiansusshi'])->name('menu.pagadian.susshi');
        Route::get('/sasshimi', [LocationController::class, 'pagadiansasshimi'])->name('menu.pagadian.sasshimi');
        Route::get('/desserts', [LocationController::class, 'pagadiandesserts'])->name('menu.pagadian.desserts');
        Route::get('/drinks', [LocationController::class, 'pagadiandrinks'])->name('menu.pagadian.drinks');
    });
});




// Ensure this route is defined in your web.php


/*
Route::view('/aboutus', 'frontend.aboutus')->name('aboutus');
Route::view('/contact-us', 'frontend.contactus')->name('contactus');*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/superadmin.php';
require __DIR__.'/admin.php';
