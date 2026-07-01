<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $departments = Department::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.appointment', compact('departments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_name'   => 'required|string|max:255',
            'phone'          => 'required|string|max:20',
            'email'          => 'nullable|email|max:255',
            'department_id'  => 'required|exists:departments,id',
            'doctor_id'      => 'nullable|exists:doctors,id',
            'preferred_date' => 'required|date|after_or_equal:today',
            'preferred_time' => 'required|string',
            'message'        => 'nullable|string|max:1000',
        ]);

        $appointment = Appointment::create($validated);

        // Attempt to send email notification (will silently fail if mail not configured)
        try {
            \Mail::to(config('mail.from.address'))->send(new \App\Mail\AppointmentMail($appointment));
        } catch (\Exception $e) {
            // Log but don't fail
        }

        return redirect()->route('appointment')->with('success', 'Your appointment request has been submitted! We will confirm shortly.');
    }
}
