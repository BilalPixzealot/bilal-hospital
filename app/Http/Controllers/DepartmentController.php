<?php

namespace App\Http\Controllers;

use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::where('is_active', true)->orderBy('sort_order')->get();
        return view('departments.index', compact('departments'));
    }

    public function show(string $slug)
    {
        $department = Department::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $doctors = $department->doctors()->where('is_active', true)->orderBy('sort_order')->get();
        $services = $department->services()->where('is_active', true)->get();
        return view('departments.show', compact('department', 'doctors', 'services'));
    }
}
