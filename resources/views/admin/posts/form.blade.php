@extends('layouts.admin')
@section('title', $post->id ? 'Edit Post' : 'New Post')

@section('admin-content')
<div class="max-w-3xl">
    <a href="{{ route('admin.posts.index') }}" class="text-sm text-gray-500 hover:text-primary mb-4 inline-flex items-center gap-1"><i class="fas fa-arrow-left"></i> Back</a>
    <div class="bg-white rounded-xl shadow-sm p-8 mt-4">
        <form action="{{ $post->id ? route('admin.posts.update', $post) : route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf @if($post->id) @method('PUT') @endif
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                <input type="text" name="title" required value="{{ old('title', $post->title) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Excerpt</label>
                <textarea name="excerpt" rows="2" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">{{ old('excerpt', $post->excerpt) }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                <textarea name="content" id="content-editor" rows="12" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">{{ old('content', $post->content) }}</textarea>
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                    <input type="text" name="category" value="{{ old('category', $post->category) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Health Tips">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Author</label>
                    <input type="text" name="author" value="{{ old('author', $post->author) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Published Date</label>
                <input type="datetime-local" name="published_at" value="{{ old('published_at', $post->published_at?->format('Y-m-d\TH:i')) }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                <input type="file" name="featured_image" accept="image/*" class="w-full text-sm border border-gray-300 rounded-lg px-4 py-3">
                @if($post->featured_image)<div class="mt-2"><img src="{{ asset('storage/' . $post->featured_image) }}" class="h-32 rounded-lg object-cover"></div>@endif
            </div>
            <div class="flex items-center gap-3">
                <input type="checkbox" name="is_active" value="1" class="rounded" {{ old('is_active', $post->is_active ?? true) ? 'checked' : '' }}>
                <label class="text-sm font-medium text-gray-700">Active / Published</label>
            </div>
            <button type="submit" class="bg-primary hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-lg transition-all">Save Post</button>
        </form>
    </div>
</div>
@endsection
