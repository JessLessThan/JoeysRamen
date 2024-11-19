<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Display a listing of the users.
    public function index(Request $request)
    {
        $location = $request->input('location');
        $search = $request->input('search');
    
        // Start with a query
        $query = User::query();
    
        // Filter by location if selected
        if ($location) {
            $query->where('location', $location);
        }
    
        // Filter by search term if entered
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
    
        $users = $query->get();
    
        return view('superadmin.useraccounts.mainuseraccounts', compact('users', 'location', 'search'));
    }
    

    // Show the form for creating a new user.
    public function create()
    {
        // Return a view for creating a new user if needed
    }

    // Store a newly created user in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password before saving
        ]);

        return response()->json($user, 201);
    }

    // Display the specified user.
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    // Show the form for editing the specified user.
    public function edit($id)
    {
        // Return a view for editing the user if needed
    }

    // Update the specified user in storage.
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|min:8',
        ]);

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;

        $user->save();

        return response()->json($user);
    }

    // Remove the specified user from storage.
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(null, 204);
    }
}
