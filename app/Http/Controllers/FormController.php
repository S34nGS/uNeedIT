<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourModel; // Optional: model to store form data if needed

class FormController extends Controller
{
    // Show the form
    public function create()
    {
        return view('your-form'); // View file name: your-form.blade.php
    }

    // Handle form submission
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Optional: Save data to database
        YourModel::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('yourForm.create')->with('success', 'Form submitted successfully.');
    }
}
