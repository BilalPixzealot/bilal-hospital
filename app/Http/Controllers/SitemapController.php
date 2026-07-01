<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Post;

class SitemapController extends Controller
{
    public function index()
    {
        $departments = Department::where('is_active', true)->get(['slug', 'updated_at']);
        $doctors     = Doctor::where('is_active', true)->get(['slug', 'updated_at']);
        $posts       = Post::where('is_active', true)->whereNotNull('published_at')->get(['slug', 'updated_at']);

        return response()->view('sitemap', compact('departments', 'doctors', 'posts'))
            ->header('Content-Type', 'text/xml');
    }
}
