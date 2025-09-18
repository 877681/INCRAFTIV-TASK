<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Show the registration form
    public function create()
    {
        return view('register.create');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'first_name' =>'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',

        ]);
        

        // Create the user
        User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Redirect to a success page or login page
        return redirect('/')->with('success', 'Registration successful! Please log in.');
    }
    
}