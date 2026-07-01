<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $items = Gallery::orderBy('sort_order')->paginate(20);
        return view('admin.gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.gallery.form', ['item' => new Gallery]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'nullable|string|max:255',
            'category'   => 'required|in:ICU,OT,Wards,General',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
            'image'      => 'required|image|max:4096',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title'      => $request->title,
            'category'   => $request->category,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => $request->boolean('is_active', true),
            'image'      => $path,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Image added.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.form', ['item' => $gallery]);
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title'      => 'nullable|string|max:255',
            'category'   => 'required|in:ICU,OT,Wards,General',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
            'image'      => 'nullable|image|max:4096',
        ]);

        $data = [
            'title'      => $request->title,
            'category'   => $request->category,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => $request->boolean('is_active'),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Image updated.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted.');
    }
}
