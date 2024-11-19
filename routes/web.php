<?php

use App\Http\Controllers\AccessDataController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OrderringsController;
use App\Http\Controllers\OzamizTabledataController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TableReservationController;
use App\Models\OzamizTabledata;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});


// Navigation
Route::view('/home', 'frontend.index')->name('home');



Route::get('/Profile/reservations', [AccessDataController::class,'accessData'])->name('reservationshistory');
Route::get('/Profile/reservations/{id}', [AccessDataController::class, 'show'])->name('reservations.show');




//reservation routes
//ozamiz
Route::get('/tablereservations/ozamiz', [TableReservationController::class,'index'])->name('reservation');
Route::get('/tablereservations/pagadian', [TableReservationController::class,'pagadianindex'])->name('pagadianreservation');

//ozamiz - reservation process
Route::get('/tablereservations/{id}', [TableReservationController::class, 'ozamizReservation'])->name('tablereservation');



Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

Route::get('/reserved', [AccessDataController::class, 'summary'])->name('reservationsummary');




//pagadian
Route::view('/reservation/pagadian', 'frontend.reservationspartials.reservationsBranches.pagadian.reservation');


Route::view('/cart', 'frontend.menupartials.menuBranches.chart.chart')->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::get('carts', [ProductsController::class, 'carts'])->name('carts');
Route::patch('update-cart', [ProductsController::class, 'updateChart'])->name('update_cart');
Route::delete('remove_from_cart', [ProductsController::class, 'remove'])->name('remove_from_cart');

Route::post('/checkout', [ProductsController    ::class, 'checkout'])->name('checkout');



//order process
Route::post('/store-order', [OrderringsController::class, 'storeOrder'])->name('orders.store');
Route::get('/order-success', function () {
    return view('frontend.menupartials.menuBranches.checkout.successpage');
})->name('success');
//feedback
Route::view('/feedback', 'frontend.feedback')->name('feedback');
Route::post('/feedbackadd', [FeedbackController::class, 'store'])->name('feedback.store');
Route::view('/location', 'frontend.location')->name('location');

Route::get('/feedback/thankyou', [FeedbackController::class, 'thankYou'])->name('thankyou');


// Menu Branches
Route::group(['prefix' => 'menu'], function() {
    // Define a route for menu that leads to a method, if needed.
    Route::get('/', [LocationController::class, 'menu'])->name('menu'); // Optional: Define a menu route
            Route::get('/confirmorder/{name}', [LocationController::class, 'showRamenProduct'])->name('menu.ramen.product'); // New route for product details


    // Group for Ozamiz menu routes
    Route::group(['prefix' => 'ozamiz'], function() {
        Route::get('/ramen', [LocationController::class, 'ramen'])->name('menu.ramen');
        Route::get('/susshi', [LocationController::class, 'susshi'])->name('menu.susshi');
        Route::get('/sasshimi', [LocationController::class, 'sasshimi'])->name('menu.sasshimi');
        Route::get('/desserts', [LocationController::class, 'desserts'])->name('menu.desserts');
        Route::get('/drinks', [LocationController::class, 'drinks'])->name('menu.drinks');
    });

    // Group for Pagadian menu routes
    Route::group(['prefix' => 'pagadian'], function() {
        Route::get('/ramen', [LocationController::class, 'pagadianramen'])->name('menu.pagadian.ramen');
        Route::get('/confirmorder/{name}', [LocationController::class, 'showPagadianRamenProduct'])->name('menu.pagadian.ramen.product'); // New route for product details
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
    Route::get('/profile/update', [ProfileController::class, 'Showprofileinfoform'])->name('profile.editprofile');
    Route::get('/profile/reset-password', [ProfileController::class, 'ShowResetPassword'])->name('profile.resetpassword');
    Route::get('/profile/delete-account', [ProfileController::class, 'Showdeleteaccount'])->name('profile.deleteaccount');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/superadmin.php';
require __DIR__.'/admin.php';
