<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Department;
use App\Models\Doctor;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'appointments'  => Appointment::count(),
            'contacts'      => Contact::where('is_read', false)->count(),
            'doctors'       => Doctor::count(),
            'departments'   => Department::count(),
        ];

        $recentAppointments = Appointment::with(['department', 'doctor'])->latest()->limit(10)->get();
        $recentContacts     = Contact::latest()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recentAppointments', 'recentContacts'));
    }
}
