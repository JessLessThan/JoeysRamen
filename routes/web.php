<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
//navigation
Route::view('/home', 'frontend.index')->name('home');

Route::view('/menu', 'frontend.menu')->name('menu');
Route::view('/reservation', 'frontend.reservation')->name('reservation');
Route::view('/catering', 'frontend.catering')->name('catering');
Route::view('/location', 'frontend.location')->name('location');

//menuBranches
Route::group(['prefix' => 'menu'], function(){


    Route::get('/ozamiz', [LocationController::class, 'ozamiz'])->name('ozamiz');
    Route::get('/pagadian', [LocationController::class, 'pagadian'])->name('pagadian');
    
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
