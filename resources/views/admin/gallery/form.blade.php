@extends('layouts.admin')
@section('title', $item->id ? 'Edit Gallery Image' : 'Add Gallery Image')

@section('admin-content')
<div class="max-w-xl">
    <a href="{{ route('admin.gallery.index') }}" class="text-sm text-gray-500 hover:text-primary mb-4 inline-flex items-center gap-1"><i class="fas fa-arrow-left"></i> Back</a>
    <div class="bg-white rounded-xl shadow-sm p-8 mt-4">
        <h2 class="font-bold text-xl text-gray-800 mb-6">{{ $item->id ? 'Edit Image' : 'Add Image' }}</h2>
        <form action="{{ $item->id ? route('admin.gallery.update', $item) : route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @if($item->id) @method('PUT') @endif

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Title (optional)</label>
                <input type="text" name="title" value="{{ old('title', $item->title) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                <select name="category" required class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    @foreach(['ICU', 'OT', 'Wards', 'General'] as $cat)
                    <option value="{{ $cat }}" {{ old('category', $item->category) === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Image {{ $item->id ? '(leave blank to keep current)' : '*' }}</label>
                <input type="file" name="image" accept="image/*" {{ !$item->id ? 'required' : '' }} class="w-full text-sm border border-gray-300 rounded-lg px-4 py-3">
                @if($item->image)<div class="mt-2"><img src="{{ asset('storage/' . $item->image) }}" class="h-32 rounded-lg object-cover"></div>@endif
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="flex items-center gap-3 pt-8">
                    <input type="checkbox" name="is_active" value="1" class="rounded" {{ old('is_active', $item->is_active ?? true) ? 'checked' : '' }}>
                    <label class="text-sm font-medium text-gray-700">Active</label>
                </div>
            </div>
            <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-lg transition-all">Save Image</button>
        </form>
    </div>
</div>
@endsection
