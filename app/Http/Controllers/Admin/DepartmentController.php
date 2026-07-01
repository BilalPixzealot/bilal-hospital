<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('sort_order')->get();
        return view('admin.departments.index', compact('departments'));
    }

    public function create()
    {
        return view('admin.departments.form', ['department' => new Department]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'              => 'required|string|max:255',
            'icon'              => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:500',
            'description'       => 'nullable|string',
            'sort_order'        => 'nullable|integer',
            'is_active'         => 'boolean',
            'image'             => 'nullable|image|max:2048',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('departments', 'public');
        }

        Department::create($data);

        return redirect()->route('admin.departments.index')->with('success', 'Department created.');
    }

    public function edit(Department $department)
    {
        return view('admin.departments.form', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $data = $request->validate([
            'name'              => 'required|string|max:255',
            'icon'              => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:500',
            'description'       => 'nullable|string',
            'sort_order'        => 'nullable|integer',
            'is_active'         => 'boolean',
            'image'             => 'nullable|image|max:2048',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('departments', 'public');
        }

        $department->update($data);

        return redirect()->route('admin.departments.index')->with('success', 'Department updated.');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('admin.departments.index')->with('success', 'Department deleted.');
    }
}
