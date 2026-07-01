<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.form', ['post' => new Post]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'          => 'required|string|max:255',
            'excerpt'        => 'nullable|string|max:500',
            'content'        => 'nullable|string',
            'category'       => 'nullable|string|max:100',
            'author'         => 'nullable|string|max:255',
            'published_at'   => 'nullable|date',
            'is_active'      => 'boolean',
            'featured_image' => 'nullable|image|max:4096',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post created.');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.form', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title'          => 'required|string|max:255',
            'excerpt'        => 'nullable|string|max:500',
            'content'        => 'nullable|string',
            'category'       => 'nullable|string|max:100',
            'author'         => 'nullable|string|max:255',
            'published_at'   => 'nullable|date',
            'is_active'      => 'boolean',
            'featured_image' => 'nullable|image|max:4096',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted.');
    }
}
