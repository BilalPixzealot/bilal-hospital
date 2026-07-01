@extends('layouts.admin')
@section('title', 'Blog Posts')

@section('admin-content')
<div class="flex justify-between items-center mb-6">
    <h2 class="font-bold text-gray-700">Blog Posts</h2>
    <a href="{{ route('admin.posts.create') }}" class="bg-primary text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors flex items-center gap-2"><i class="fas fa-plus"></i> New Post</a>
</div>
<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-xs uppercase text-gray-500"><tr><th class="px-4 py-3 text-left">Title</th><th class="px-4 py-3 text-left">Category</th><th class="px-4 py-3 text-left">Author</th><th class="px-4 py-3 text-left">Status</th><th class="px-4 py-3 text-left">Actions</th></tr></thead>
        <tbody class="divide-y divide-gray-100">
            @forelse($posts as $post)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800 max-w-xs truncate">{{ $post->title }}</td>
                <td class="px-4 py-3 text-gray-500">{{ $post->category ?? '—' }}</td>
                <td class="px-4 py-3 text-gray-500">{{ $post->author ?? '—' }}</td>
                <td class="px-4 py-3"><span class="px-2 py-1 rounded-full text-xs {{ $post->is_active && $post->published_at ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">{{ $post->is_active && $post->published_at ? 'Published' : 'Draft' }}</span></td>
                <td class="px-4 py-3 flex gap-2">
                    <a href="{{ route('admin.posts.edit', $post) }}" class="text-primary hover:underline text-xs">Edit</a>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')<button class="text-red-500 hover:underline text-xs">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="px-4 py-8 text-center text-gray-400">No posts yet</td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="p-4">{{ $posts->links() }}</div>
</div>
@endsection
