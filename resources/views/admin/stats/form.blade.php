@extends('layouts.admin')
@section('title', $stat->id ? 'Edit Stat' : 'Add Stat')

@section('admin-content')
<div class="max-w-md">
    <a href="{{ route('admin.stats.index') }}" class="text-sm text-gray-500 hover:text-primary mb-4 inline-flex items-center gap-1"><i class="fas fa-arrow-left"></i> Back</a>
    <div class="bg-white rounded-xl shadow-sm p-8 mt-4">
        <form action="{{ $stat->id ? route('admin.stats.update', $stat) : route('admin.stats.store') }}" method="POST" class="space-y-5">
            @csrf @if($stat->id) @method('PUT') @endif
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Label *</label><input type="text" name="label" required value="{{ old('label', $stat->label) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Years of Experience"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Value *</label><input type="text" name="value" required value="{{ old('value', $stat->value) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary" placeholder="17"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Suffix</label><input type="text" name="suffix" value="{{ old('suffix', $stat->suffix) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary" placeholder="+"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label><input type="number" name="sort_order" value="{{ old('sort_order', $stat->sort_order ?? 0) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary"></div>
            <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-lg transition-all">Save</button>
        </form>
    </div>
</div>
@endsection
