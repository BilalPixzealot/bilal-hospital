@extends('layouts.admin')
@section('title', 'Departments')

@section('admin-content')
<div class="flex justify-between items-center mb-6">
    <h2 class="font-bold text-gray-700">Manage Departments</h2>
    <a href="{{ route('admin.departments.create') }}" class="bg-primary text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors flex items-center gap-2"><i class="fas fa-plus"></i> Add Department</a>
</div>
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-xs uppercase text-gray-500"><tr><th class="px-4 py-3 text-left">#</th><th class="px-4 py-3 text-left">Name</th><th class="px-4 py-3 text-left">Status</th><th class="px-4 py-3 text-left">Actions</th></tr></thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($departments as $dept)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 text-gray-400">{{ $dept->sort_order }}</td>
                <td class="px-4 py-3 font-medium text-gray-800">{{ $dept->name }}</td>
                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full text-xs {{ $dept->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">{{ $dept->is_active ? 'Active' : 'Inactive' }}</span></td>
                <td class="px-4 py-3">
                    <div class="flex gap-2">
                        <a href="{{ route('admin.departments.edit', $dept) }}" class="text-primary hover:underline text-xs">Edit</a>
                        <form action="{{ route('admin.departments.destroy', $dept) }}" method="POST" onsubmit="return confirm('Delete this department?')">
                            @csrf @method('DELETE')
                            <button class="text-red-500 hover:underline text-xs">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
