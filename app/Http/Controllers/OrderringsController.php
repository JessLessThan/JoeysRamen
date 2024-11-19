<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderringsController extends Controller
{
    public function storeOrder(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'orderQuantity' => 'nullable|integer', // Nullable and integer check
            'customername' => 'nullable|string', // Nullable and string check
            'customerphone' => 'nullable|string', // Nullable and string check
            'customerlocation' => 'nullable|string', // Nullable and string check
            'ordertotal' => 'nullable|numeric', // Nullable and numeric check
            'orderphoto' => 'nullable|string', // Nullable and string check
            'ordername' => 'nullable|string', // Nullable and string check
            'order_type' => 'nullable|string', // Nullable and string check
            'order_date' => 'nullable|date', // Nullable and date check
            'order_time' => 'nullable|date_format:H:i', // Nullable and valid time format check
            'form_location' => 'nullable|string', // Nullable and string check
            'form_detailedlocation' => 'nullable|string', // Nullable and string check
        ]);
        

        // Create a new order record in the database
        $order = Order::create([
            'order_quantity' => $validatedData['orderQuantity'],
            'customer_name' => $validatedData['customername'],
            'customer_phone' => $validatedData['customerphone'],
            'customer_location' => $validatedData['customerlocation'],
            'order_total_price' => $validatedData['ordertotal'],
            'order_photo' => $validatedData['orderphoto'],
            'order_name' => $validatedData['ordername'],
            'order_type' => $validatedData['order_type'],
            'order_date' => $validatedData['order_date'],
            'order_time' => $validatedData['order_time'],
            'form_location' => $validatedData['form_location'], 
            'form_detailed_location' => $validatedData['form_detailedlocation'] ?? null,
            'user_id' => Auth::id(), // Store the user ID of the currently authenticated user

        ]);

        session()->forget('cart');  // Clear cart stored in the session

        // Redirect to a success page or the orders list
        return redirect()->route('success')->with('success', 'Order placed successfully!');
}


}