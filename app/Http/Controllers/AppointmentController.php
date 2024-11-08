<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            $appointments = Appointment::all();
        } else {
            $appointments = Appointment::where('user_id', $user->id)->get();
            if ($appointments->isEmpty()) {
                return view('appointment.index', ['appointments' => $appointments, 'message' => 'Geen gemaakte afspraken']);
            }
        }
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
        // $appointmentData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'brand' => 'required',
        //     'modelNumber' => 'required',
        //     'date' => 'required|date_format:Y-m-d H:i',
        //     'message' => 'required',
        //   ]);

        //   Appointment::create($appointmentData);

        //   return back()->with('success', 'Appointment created successfully.');

          Appointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'brand' => $request->brand,
            'modelNumber' => $request->modelNumber,
            'date' => $request->date,
            'message' => $request->message,
            'user_id' => Auth::check() ? Auth::id() : null
        ]);
    
        return back()->with('success', 'Appointment created successfully.');
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
        $appointment = Appointment::findOrFail($id);
        return view('appointment.edit', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);
    
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'brand' => 'required',
            'modelNumber' => 'required',
            'date' => 'required|date_format:Y-m-d H:i',
            'message' => 'required',
        ]);
    
        $appointment->update($validatedData);
    
        return redirect()->route('appointment.index')->with('success', 'Appointment updated successfully.');
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
