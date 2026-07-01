<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with(['department', 'doctor'])->latest()->paginate(20);
        return view('admin.appointments.index', compact('appointments'));
    }

    public function updateStatus(Request $request, Appointment $appointment)
    {
        $request->validate(['status' => 'required|in:pending,confirmed,cancelled']);
        $appointment->update(['status' => $request->status]);
        return back()->with('success', 'Status updated.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('admin.appointments.index')->with('success', 'Appointment deleted.');
    }
}
