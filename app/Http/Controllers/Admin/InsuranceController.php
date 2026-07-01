<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InsuranceCompany;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index()
    {
        $companies = InsuranceCompany::orderBy('type')->orderBy('sort_order')->get();
        return view('admin.insurance.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.insurance.form', ['company' => new InsuranceCompany]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'type'       => 'required|in:insurance,tpa,government',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
        ]);
        $data['is_active'] = $request->boolean('is_active', true);
        InsuranceCompany::create($data);
        return redirect()->route('admin.insurance.index')->with('success', 'Company added.');
    }

    public function edit(InsuranceCompany $insurance)
    {
        return view('admin.insurance.form', ['company' => $insurance]);
    }

    public function update(Request $request, InsuranceCompany $insurance)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'type'       => 'required|in:insurance,tpa,government',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        $insurance->update($data);
        return redirect()->route('admin.insurance.index')->with('success', 'Company updated.');
    }

    public function destroy(InsuranceCompany $insurance)
    {
        $insurance->delete();
        return redirect()->route('admin.insurance.index')->with('success', 'Company deleted.');
    }
}
