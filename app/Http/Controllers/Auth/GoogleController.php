<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    // Redirect the user to the Google authentication page
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Obtain the user information from Google and log them in
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        
        // Check if the user exists in the database
        $user = User::where('google_id', $googleUser->id)->first();
        
        // If the user doesn't exist, create a new user
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                // Other fields like profile picture, etc.
            ]);
        }

        // Log the user in
        Auth::login($user);

        return redirect()->route('home'); // Redirect to a page after login
    }
}
