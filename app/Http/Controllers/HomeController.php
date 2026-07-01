<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Stat;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $data = Cache::remember('homepage_data', 3600, function () {
            return [
                'departments'  => Department::where('is_active', true)->orderBy('sort_order')->get(),
                'doctors'      => Doctor::with('department')->where('is_active', true)->orderBy('sort_order')->limit(8)->get(),
                'stats'        => Stat::orderBy('sort_order')->get(),
                'testimonials' => Testimonial::where('is_active', true)->latest()->get(),
                'gallery'      => Gallery::where('is_active', true)->orderBy('sort_order')->limit(6)->get(),
                'posts'        => Post::where('is_active', true)->whereNotNull('published_at')->latest('published_at')->limit(3)->get(),
            ];
        });

        return view('pages.home', $data);
    }
}
