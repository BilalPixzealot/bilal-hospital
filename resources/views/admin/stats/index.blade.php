@extends('layouts.admin')
@section('title', 'Stats')

@section('admin-content')
<div class="flex justify-between items-center mb-6">
    <h2 class="font-bold text-gray-700">Homepage Stats</h2>
    <a href="{{ route('admin.stats.create') }}" class="bg-primary text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors flex items-center gap-2"><i class="fas fa-plus"></i> Add Stat</a>
</div>
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-xs uppercase text-gray-500"><tr><th class="px-4 py-3 text-left">Label</th><th class="px-4 py-3 text-left">Value</th><th class="px-4 py-3 text-left">Suffix</th><th class="px-4 py-3 text-left">Actions</th></tr></thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($stats as $stat)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">{{ $stat->label }}</td>
                <td class="px-4 py-3 text-gray-600">{{ number_format($stat->value) }}</td>
                <td class="px-4 py-3 text-gray-500">{{ $stat->suffix }}</td>
                <td class="px-4 py-3 flex gap-2">
                    <a href="{{ route('admin.stats.edit', $stat) }}" class="text-primary hover:underline text-xs">Edit</a>
                    <form action="{{ route('admin.stats.destroy', $stat) }}" method="POST" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')<button class="text-red-500 hover:underline text-xs">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
