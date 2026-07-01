@extends('layouts.admin')
@section('title', 'Insurance Companies')

@section('admin-content')
<div class="flex justify-between items-center mb-6">
    <h2 class="font-bold text-gray-700">Insurance & TPA Companies</h2>
    <a href="{{ route('admin.insurance.create') }}" class="bg-primary text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors flex items-center gap-2"><i class="fas fa-plus"></i> Add Company</a>
</div>
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-xs uppercase text-gray-500"><tr><th class="px-4 py-3 text-left">Name</th><th class="px-4 py-3 text-left">Type</th><th class="px-4 py-3 text-left">Status</th><th class="px-4 py-3 text-left">Actions</th></tr></thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($companies as $c)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">{{ $c->name }}</td>
                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full text-xs bg-blue-100 text-blue-700 capitalize">{{ $c->type }}</span></td>
                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full text-xs {{ $c->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">{{ $c->is_active ? 'Active' : 'Inactive' }}</span></td>
                <td class="px-4 py-3 flex gap-2">
                    <a href="{{ route('admin.insurance.edit', $c) }}" class="text-primary hover:underline text-xs">Edit</a>
                    <form action="{{ route('admin.insurance.destroy', $c) }}" method="POST" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')<button class="text-red-500 hover:underline text-xs">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
