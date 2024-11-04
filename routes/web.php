<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});


// Navigation
Route::view('/home', 'frontend.index')->name('home');


//reservation routes
//ozamiz
Route::view('/reservation/ozamiz', 'frontend.reservationspartials.reservationsBranches.ozamiz.reservation')->name('reservation');


//pagadian
Route::view('/reservation/pagadian', 'frontend.reservationspartials.reservationsBranches.pagadian.reservation');



Route::view('/catering', 'frontend.catering')->name('catering');
Route::view('/location', 'frontend.location')->name('location');

// Menu Branches
Route::group(['prefix' => 'menu'], function() {
    // Define a route for menu that leads to a method, if needed.
    Route::get('/', [LocationController::class, 'menu'])->name('menu'); // Optional: Define a menu route

    // Group for Ozamiz menu routes
    Route::group(['prefix' => 'ozamiz'], function() {
        Route::get('/ramen', [LocationController::class, 'ramen'])->name('menu.ramen');
        Route::get('/ramen/{name}', [LocationController::class, 'showRamenProduct'])->name('menu.ramen.product'); // New route for product details
        Route::get('/susshi', [LocationController::class, 'susshi'])->name('menu.susshi');
        Route::get('/sasshimi', [LocationController::class, 'sasshimi'])->name('menu.sasshimi');
        Route::get('/desserts', [LocationController::class, 'desserts'])->name('menu.desserts');
        Route::get('/drinks', [LocationController::class, 'drinks'])->name('menu.drinks');
    });

    // Group for Pagadian menu routes
    Route::group(['prefix' => 'pagadian'], function() {
        Route::get('/ramen', [LocationController::class, 'pagadianramen'])->name('menu.pagadian.ramen');
        Route::get('/ramen/{name}', [LocationController::class, 'showPagadianRamenProduct'])->name('menu.pagadian.ramen.product'); // New route for product details
        Route::get('/susshi', [LocationController::class, 'pagadiansusshi'])->name('menu.pagadian.susshi');
        Route::get('/sasshimi', [LocationController::class, 'pagadiansasshimi'])->name('menu.pagadian.sasshimi');
        Route::get('/desserts', [LocationController::class, 'pagadiandesserts'])->name('menu.pagadian.desserts');
        Route::get('/drinks', [LocationController::class, 'pagadiandrinks'])->name('menu.pagadian.drinks');
    });
});

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
