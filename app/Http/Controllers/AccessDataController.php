<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AccessDataController extends Controller
{
    public function accessData()
{
    $reservations = Reservation::where('user_id', auth()->id())->get();
    return view('frontend.OrderReservation.reservation', compact('reservations'));
    
}
public function show($id)
{
    $reservation = Reservation::findOrFail($id); // Retrieve the reservation by ID or show 404
    return view('frontend.OrderReservation.reservationdetails', compact('reservation'));
}

public function summary()
{
    $reservation = Reservation::where('user_id', auth()->id())
                              ->latest()
                              ->first();
    return view('frontend.reservationspartials.reservationsBranches.ozamiz.partials.success.succes', compact('reservation'));
}



}
