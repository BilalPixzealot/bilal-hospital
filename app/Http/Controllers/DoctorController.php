<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $departments = Department::where('is_active', true)->orderBy('sort_order')->get();
        $query = Doctor::with('department')->where('is_active', true)->orderBy('sort_order');

        if ($request->filled('department')) {
            $query->where('department_id', $request->department);
        }

        $doctors = $query->get();
        return view('doctors.index', compact('doctors', 'departments'));
    }

    public function show(string $slug)
    {
        $doctor = Doctor::with('department')->where('slug', $slug)->where('is_active', true)->firstOrFail();
        $departments = Department::where('is_active', true)->orderBy('sort_order')->get();
        return view('doctors.show', compact('doctor', 'departments'));
    }

    public function byDepartment(int $departmentId)
    {
        $doctors = Doctor::where('department_id', $departmentId)->where('is_active', true)->orderBy('sort_order')->get(['id', 'name', 'designation']);
        return response()->json($doctors);
    }
}
