<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $query = Gallery::where('is_active', true)->orderBy('sort_order');

        if ($request->filled('category') && $request->category !== 'All') {
            $query->where('category', $request->category);
        }

        $images = $query->get();
        $categories = ['All', 'ICU', 'OT', 'Wards', 'General'];
        $activeCategory = $request->get('category', 'All');

        return view('pages.gallery', compact('images', 'categories', 'activeCategory'));
    }
}
