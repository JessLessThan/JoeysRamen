<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function Showprofileinfoform() {
        // Fetch the authenticated user
        $user = Auth::user();
        
        // Pass the user data to the view
        return view('profile.partials.update-profile-information-form', compact('user'));
    }

    public function ShowResetPassword() {
        // Fetch the authenticated user
        $user = Auth::user();
        
        // Pass the user data to the view
        return view('profile.partials.update-password-form', compact('user'));
    }

    public function Showdeleteaccount() {
        // Fetch the authenticated user
        $user = Auth::user();
        
        // Pass the user data to the view
        return view('profile.partials.delete-user-form', compact('user'));
    }

    public function edit(Request $request): View
    {
        return view('profile.partials.update-profile-information-form', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Fill the user model with validated data
        $request->user()->fill($request->validated());
    
        // Check if the email has been updated and reset email verification if true
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
    
        // Update phone and location if they exist in the request
        if ($request->has('phone')) {
            $request->user()->phone = $request->input('phone');
        }
        
        if ($request->has('location')) {
            $request->user()->location = $request->input('location');
        }
    
        // Save the updated user data
        $request->user()->save();
    
        // Redirect with a success message
        return Redirect::route('profile.editprofile')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/home');
    }
}
