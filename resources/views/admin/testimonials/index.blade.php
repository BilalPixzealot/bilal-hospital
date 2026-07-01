@extends('layouts.admin')
@section('title', 'Testimonials')

@section('admin-content')
<div class="flex justify-between items-center mb-6">
    <h2 class="font-bold text-gray-700">Manage Testimonials</h2>
    <a href="{{ route('admin.testimonials.create') }}" class="bg-primary text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors flex items-center gap-2"><i class="fas fa-plus"></i> Add</a>
</div>
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-xs uppercase text-gray-500"><tr><th class="px-4 py-3 text-left">Patient</th><th class="px-4 py-3 text-left">Review</th><th class="px-4 py-3 text-left">Rating</th><th class="px-4 py-3 text-left">Status</th><th class="px-4 py-3 text-left">Actions</th></tr></thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($testimonials as $t)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">{{ $t->patient_name }}</td>
                <td class="px-4 py-3 text-gray-600 max-w-xs truncate">{{ $t->review }}</td>
                <td class="px-4 py-3 text-yellow-500">{{ str_repeat('★', $t->rating) }}</td>
                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full text-xs {{ $t->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">{{ $t->is_active ? 'Visible' : 'Hidden' }}</span></td>
                <td class="px-4 py-3 flex gap-2">
                    <a href="{{ route('admin.testimonials.edit', $t) }}" class="text-primary hover:underline text-xs">Edit</a>
                    <form action="{{ route('admin.testimonials.destroy', $t) }}" method="POST" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')<button class="text-red-500 hover:underline text-xs">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
