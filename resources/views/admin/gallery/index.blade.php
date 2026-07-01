@extends('layouts.admin')
@section('title', 'Gallery')

@section('admin-content')
<div class="flex justify-between items-center mb-6">
    <h2 class="font-bold text-gray-700">Manage Gallery</h2>
    <a href="{{ route('admin.gallery.create') }}" class="bg-primary text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors flex items-center gap-2"><i class="fas fa-plus"></i> Add Image</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    @forelse($items as $item)
    <div class="bg-white rounded-xl overflow-hidden shadow-sm">
        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-36 object-cover">
        <div class="p-3">
            <p class="text-xs font-medium text-gray-700 truncate">{{ $item->title ?? '—' }}</p>
            <p class="text-xs text-gray-400">{{ $item->category }}</p>
            <div class="flex gap-2 mt-2">
                <a href="{{ route('admin.gallery.edit', $item) }}" class="text-primary hover:underline text-xs">Edit</a>
                <form action="{{ route('admin.gallery.destroy', $item) }}" method="POST" onsubmit="return confirm('Delete?')">
                    @csrf @method('DELETE')<button class="text-red-500 hover:underline text-xs">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-4 text-center py-12 text-gray-400">No images in gallery yet.</div>
    @endforelse
</div>
<div class="mt-4">{{ $items->links() }}</div>
@endsection
