<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appointmentData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'brand' => 'required',
            'modelNumber' => 'required',
            'date' => 'required|date_format:Y-m-d H:i',
            'message' => 'required',
          ]);

          Appointment::create($appointmentData);

          return redirect()->route('home')->with('success','Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('appointment.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('appointment.edit', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        // Validate the input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required|date',
            'option' => 'required',
            'modelNumber' => 'required',
            'message' => 'required',
        ]);

        // Update the note's title and content; encryption is handled by the model
        $appointment->update([
            'name' => $request->input('required'),
            'email' => $request->input('required|email'),
            'date' => $request->input('required|date'),
            'option' => $request->input('required'),
            'modelNumber' => $request->input('required'),
            'message' => $request->input('required'),
        ]);

        return redirect()->route('appointment.index')
            ->with('success', 'Appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointment.index')
          ->with('success', 'Appointment deleted successfully');
    }

    public function getBookedDates()
    {
        // Retrieve dates from the appointments table and return them as an array
        $bookedDates = Appointment::pluck('date')->toArray(); // Replace 'date' with the appropriate field
        return response()->json($bookedDates);
    }
}
