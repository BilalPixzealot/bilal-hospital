<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('department')->orderBy('sort_order')->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        $departments = Department::where('is_active', true)->orderBy('name')->get();
        return view('admin.doctors.form', ['doctor' => new Doctor, 'departments' => $departments]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'           => 'required|string|max:255',
            'designation'    => 'nullable|string|max:255',
            'qualifications' => 'nullable|string|max:500',
            'department_id'  => 'nullable|exists:departments,id',
            'bio'            => 'nullable|string',
            'opd_days'       => 'nullable|string|max:255',
            'opd_timing'     => 'nullable|string|max:255',
            'sort_order'     => 'nullable|integer',
            'is_active'      => 'boolean',
            'photo'          => 'nullable|image|max:2048',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('doctors', 'public');
        }

        Doctor::create($data);

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor created.');
    }

    public function edit(Doctor $doctor)
    {
        $departments = Department::where('is_active', true)->orderBy('name')->get();
        return view('admin.doctors.form', compact('doctor', 'departments'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->validate([
            'name'           => 'required|string|max:255',
            'designation'    => 'nullable|string|max:255',
            'qualifications' => 'nullable|string|max:500',
            'department_id'  => 'nullable|exists:departments,id',
            'bio'            => 'nullable|string',
            'opd_days'       => 'nullable|string|max:255',
            'opd_timing'     => 'nullable|string|max:255',
            'sort_order'     => 'nullable|integer',
            'is_active'      => 'boolean',
            'photo'          => 'nullable|image|max:2048',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('doctors', 'public');
        }

        $doctor->update($data);

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor updated.');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctors.index')->with('success', 'Doctor deleted.');
    }
}
