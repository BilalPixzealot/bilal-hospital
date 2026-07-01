<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.form', ['testimonial' => new Testimonial]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_name' => 'required|string|max:255',
            'review'       => 'required|string',
            'rating'       => 'required|integer|min:1|max:5',
            'source'       => 'required|in:Google,Facebook,On-site',
            'is_active'    => 'boolean',
        ]);
        $data['is_active'] = $request->boolean('is_active', true);
        Testimonial::create($data);
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.form', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'patient_name' => 'required|string|max:255',
            'review'       => 'required|string',
            'rating'       => 'required|integer|min:1|max:5',
            'source'       => 'required|in:Google,Facebook,On-site',
            'is_active'    => 'boolean',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        $testimonial->update($data);
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted.');
    }
}
