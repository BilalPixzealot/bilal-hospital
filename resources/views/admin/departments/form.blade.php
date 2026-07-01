@extends('layouts.admin')
@section('title', $department->id ? 'Edit Department' : 'Add Department')

@section('admin-content')
<div class="max-w-2xl">
    <a href="{{ route('admin.departments.index') }}" class="text-sm text-gray-500 hover:text-primary mb-4 inline-flex items-center gap-1"><i class="fas fa-arrow-left"></i> Back</a>
    <div class="bg-white rounded-xl shadow-sm p-8 mt-4">
        <h2 class="font-bold text-xl text-gray-800 mb-6">{{ $department->id ? 'Edit Department' : 'Add Department' }}</h2>
        <form action="{{ $department->id ? route('admin.departments.update', $department) : route('admin.departments.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @if($department->id) @method('PUT') @endif

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Department Name *</label>
                <input type="text" name="name" required value="{{ old('name', $department->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Icon (Font Awesome class name)</label>
                <input type="text" name="icon" value="{{ old('icon', $department->icon) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary" placeholder="e.g. heart-pulse">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Short Description</label>
                <textarea name="short_description" rows="2" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">{{ old('short_description', $department->short_description) }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Full Description</label>
                <textarea name="description" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">{{ old('description', $department->description) }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Department Image</label>
                <input type="file" name="image" accept="image/*" class="w-full text-sm border border-gray-300 rounded-lg px-4 py-3">
                @if($department->image)<div class="mt-2"><img src="{{ asset('storage/' . $department->image) }}" class="h-20 rounded-lg object-cover"></div>@endif
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $department->sort_order) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="flex items-center gap-3 pt-8">
                    <input type="checkbox" name="is_active" id="is_active" value="1" class="rounded" {{ old('is_active', $department->is_active ?? true) ? 'checked' : '' }}>
                    <label for="is_active" class="text-sm font-medium text-gray-700">Active</label>
                </div>
            </div>

            <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-lg transition-all">Save Department</button>
        </form>
    </div>
</div>
@endsection
