<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        $stats = Stat::orderBy('sort_order')->get();
        return view('admin.stats.index', compact('stats'));
    }

    public function create()
    {
        return view('admin.stats.form', ['stat' => new Stat]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'label'      => 'required|string|max:255',
            'value'      => 'required|string|max:50',
            'suffix'     => 'nullable|string|max:10',
            'icon'       => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer',
        ]);
        Stat::create($data);
        return redirect()->route('admin.stats.index')->with('success', 'Stat created.');
    }

    public function edit(Stat $stat)
    {
        return view('admin.stats.form', compact('stat'));
    }

    public function update(Request $request, Stat $stat)
    {
        $data = $request->validate([
            'label'      => 'required|string|max:255',
            'value'      => 'required|string|max:50',
            'suffix'     => 'nullable|string|max:10',
            'icon'       => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer',
        ]);
        $stat->update($data);
        return redirect()->route('admin.stats.index')->with('success', 'Stat updated.');
    }

    public function destroy(Stat $stat)
    {
        $stat->delete();
        return redirect()->route('admin.stats.index')->with('success', 'Stat deleted.');
    }
}
