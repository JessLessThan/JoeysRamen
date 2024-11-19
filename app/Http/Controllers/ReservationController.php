<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'table_id' => 'required|integer',
        'table_number' => 'required|string',
        'location' => 'required|string',
        'number_of_persons' => 'required|integer|min:1',
        'reservation_date' => 'required|date',
        'reservation_time' => 'required|string',
        'description' => 'nullable|string',
        'pre_order_quantity' => 'nullable|string',
        'pre_order_total' => 'nullable|string',
    ]);
    
    // Add the authenticated user's ID to the validated data
    $validatedData['user_id'] = Auth::id();
    

    // Check if the combination of table_id, location, reservation_date, and reservation_time already exists
    $exists = Reservation::where('table_id', $validatedData['table_id'])
        ->where('location', $validatedData['location'])
        ->where('reservation_date', $validatedData['reservation_date'])
        ->where('reservation_time', $validatedData['reservation_time'])
        ->exists();
        

    if ($exists) {
        return redirect()->back()->withErrors(['reservation_time' => 'This Set is Reserve Aldready'])->withInput();
    }

     // Create the reservation using the validated data
     Reservation::create($validatedData);
    

     
    // Redirect with success message
    return redirect()->route('reservationsummary');
}

public function show()
{
    // Fetch the latest reservation for the authenticated user
    $reservation = Reservation::where('user_id', Auth::id())
                              ->latest()
                              ->first();

    // Check if a reservation exists
    if (!$reservation) {
        return redirect()->back()->with('error', 'No reservation found.');
    }

    // Pass the reservation data to the view
    return view('frontend.reservationspartials.reservationsBranches.ozamiz.partials.success.succes', [
        'reservation' =>  $reservation,
    ]);
}

}
