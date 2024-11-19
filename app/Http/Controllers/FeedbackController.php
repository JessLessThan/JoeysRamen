<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback; // Ensure this model exists
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'feedback' => 'required|string|max:1000',
    ]);

    Feedback::create([
        'user_id' => Auth::id(),
        'rating' => $request->rating,
        'feedback' => $request->feedback,
        'user_name' => Auth::user()->name,
        'location' => Auth::user()->location,
    ]);

    // Redirect to a specific route
    return redirect()->route('thankyou')->with('success', 'Thank you for your feedback!');
}

public function thankYou(){
    return view('frontend.reservationspartials.reservationsummary.thankyoufeedback');
}

}
