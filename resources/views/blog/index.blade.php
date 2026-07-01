@extends('layouts.app')
@section('title', 'Health Blog – Bilal Hospital Mumbra')
@section('meta_description', 'Health tips, articles and updates from the expert doctors at Bilal Hospital, Mumbra.')

@section('content')

{{-- Page Hero --}}
<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Health Insights</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">Health Blog</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">Expert advice, tips and health updates from our specialist doctors</p>
    </div>
</div>

{{-- Breadcrumb --}}
<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="{{ route('home') }}" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>Health Blog</span>
        </p>
    </div>
</div>

<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">

        {{-- Category Filter --}}
        @if($categories->count())
        <div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:center;margin-bottom:40px;" data-aos="fade-up">
            <a href="{{ route('blog') }}"
               style="display:inline-block;padding:10px 22px;border-radius:4px;font-family:Montserrat;font-size:12px;font-weight:700;letter-spacing:0.5px;text-decoration:none;transition:all 0.2s;
               {{ !request('category') ? 'background:#1B3A7A;color:#fff;' : 'background:#fff;color:#1B3A7A;border:2px solid #e5e7eb;' }}">
               All Articles
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('blog', ['category' => $cat]) }}"
               style="display:inline-block;padding:10px 22px;border-radius:4px;font-family:Montserrat;font-size:12px;font-weight:700;letter-spacing:0.5px;text-decoration:none;transition:all 0.2s;
               {{ request('category') === $cat ? 'background:#1B3A7A;color:#fff;' : 'background:#fff;color:#1B3A7A;border:2px solid #e5e7eb;' }}">
               {{ $cat }}
            </a>
            @endforeach
        </div>
        @endif

        @if($posts->count())
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            @foreach($posts as $post)
            <article style="background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 20px rgba(27,58,122,0.06);transition:all 0.3s;"
                     class="hover:shadow-xl hover:-translate-y-1"
                     data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                @if($post->featured_image)
                <div style="overflow:hidden;height:210px;">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                         style="width:100%;height:100%;object-fit:cover;transition:transform 0.5s;"
                         onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'"
                         loading="lazy" width="400" height="210">
                </div>
                @else
                <div style="height:210px;background:rgba(27,58,122,0.06);display:flex;align-items:center;justify-content:center;">
                    <i class="fas fa-newspaper" style="color:#1B3A7A;opacity:0.2;font-size:48px;"></i>
                </div>
                @endif
                <div style="padding:24px;">
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px;flex-wrap:wrap;">
                        @if($post->category)
                        <span style="background:rgba(245,130,31,0.1);color:#F5821F;font-family:Montserrat;font-weight:700;font-size:10px;letter-spacing:1px;text-transform:uppercase;padding:4px 10px;border-radius:20px;">{{ $post->category }}</span>
                        @endif
                        @if($post->published_at)
                        <span style="font-family:Ubuntu;font-size:12px;color:#9ca3af;"><i class="fas fa-calendar-alt mr-1"></i>{{ $post->published_at->format('M d, Y') }}</span>
                        @endif
                    </div>
                    <h3 style="font-family:Montserrat;font-weight:700;font-size:15px;color:#1B3A7A;margin-bottom:10px;line-height:1.4;">{{ $post->title }}</h3>
                    <p style="font-family:Ubuntu;color:#6b6b6b;font-size:13px;line-height:1.7;margin-bottom:16px;" class="line-clamp-3">{{ $post->excerpt }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}"
                       style="font-family:Montserrat;font-weight:700;font-size:12px;color:#F5821F;text-decoration:none;letter-spacing:0.5px;display:inline-flex;align-items:center;gap:6px;text-transform:uppercase;">
                       Read More <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div style="display:flex;justify-content:center;">
            {{ $posts->links() }}
        </div>

        @else
        <div class="text-center py-24">
            <i class="fas fa-newspaper" style="color:#1B3A7A;opacity:0.12;font-size:72px;margin-bottom:20px;display:block;"></i>
            <h3 style="font-family:Montserrat;font-weight:700;color:#1B3A7A;font-size:18px;margin-bottom:8px;">No Articles Yet</h3>
            <p style="font-family:Ubuntu;color:#6b6b6b;">Health articles coming soon. Check back later!</p>
        </div>
        @endif
    </div>
</section>

@endsection
