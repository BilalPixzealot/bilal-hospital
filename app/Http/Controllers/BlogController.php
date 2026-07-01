<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::where('is_active', true)->whereNotNull('published_at')->latest('published_at');

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $posts = $query->paginate(9);
        $categories = Post::where('is_active', true)->whereNotNull('category')->distinct()->pluck('category');

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $related = Post::where('is_active', true)->where('id', '!=', $post->id)->latest('published_at')->limit(3)->get();
        return view('blog.show', compact('post', 'related'));
    }
}
