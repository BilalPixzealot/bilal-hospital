@extends('layouts.app')
@section('title', $post->title . ' – Bilal Hospital Blog')
@section('meta_description', $post->excerpt)

@section('content')

{{-- Page Hero --}}
<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-5xl mx-auto px-5 text-center">
        @if($post->category)
        <span style="display:inline-block;background:#F5821F;color:#fff;font-family:Montserrat;font-weight:700;font-size:10px;letter-spacing:2px;text-transform:uppercase;padding:6px 16px;border-radius:20px;margin-bottom:16px;">{{ $post->category }}</span>
        @endif
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(1.6rem,4vw,2.8rem);color:#fff;margin-bottom:20px;line-height:1.3;">{{ $post->title }}</h1>
        <div style="display:flex;align-items:center;justify-content:center;gap:20px;flex-wrap:wrap;">
            @if($post->author)
            <span style="font-family:Ubuntu;font-size:13px;color:rgba(255,255,255,0.65);"><i class="fas fa-user-md mr-2"></i>{{ $post->author }}</span>
            @endif
            @if($post->published_at)
            <span style="font-family:Ubuntu;font-size:13px;color:rgba(255,255,255,0.65);"><i class="fas fa-calendar mr-2"></i>{{ $post->published_at->format('M d, Y') }}</span>
            @endif
        </div>
    </div>
</div>

{{-- Breadcrumb --}}
<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="{{ route('home') }}" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <a href="{{ route('blog') }}" style="color:#1B3A7A;">Blog</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>{{ Str::limit($post->title, 50) }}</span>
        </p>
    </div>
</div>

<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-3 gap-10">

            {{-- Article --}}
            <article class="lg:col-span-2" data-aos="fade-right">
                @if($post->featured_image)
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                     style="width:100%;border-radius:12px;margin-bottom:32px;box-shadow:0 4px 24px rgba(27,58,122,0.12);"
                     loading="eager" fetchpriority="high" width="800" height="420">
                @endif
                <div style="background:#fff;border-radius:12px;padding:40px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <div style="font-family:Ubuntu;font-size:15px;color:#4b5563;line-height:1.9;">
                        {!! $post->content !!}
                    </div>

                    {{-- Share --}}
                    <div style="margin-top:32px;padding-top:24px;border-top:2px solid #F7F9FC;display:flex;align-items:center;gap:12px;flex-wrap:wrap;">
                        <span style="font-family:Montserrat;font-weight:700;font-size:12px;color:#1B3A7A;text-transform:uppercase;letter-spacing:1px;">Share:</span>
                        <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . url()->current()) }}" target="_blank"
                           style="width:38px;height:38px;background:#25D366;color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;text-decoration:none;font-size:15px;">
                           <i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank"
                           style="width:38px;height:38px;background:#1877F2;color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;text-decoration:none;font-size:15px;">
                           <i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" target="_blank"
                           style="width:38px;height:38px;background:#1DA1F2;color:#fff;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;text-decoration:none;font-size:15px;">
                           <i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <div style="margin-top:24px;">
                    <a href="{{ route('blog') }}" style="display:inline-flex;align-items:center;gap:8px;font-family:Montserrat;font-weight:700;font-size:13px;color:#1B3A7A;text-decoration:none;text-transform:uppercase;letter-spacing:0.5px;">
                        <i class="fas fa-arrow-left"></i> Back to Blog
                    </a>
                </div>
            </article>

            {{-- Sidebar --}}
            <aside data-aos="fade-left" class="space-y-6">

                {{-- Book Appointment --}}
                <div style="background:linear-gradient(135deg,#1B3A7A,#122550);border-radius:12px;padding:28px;text-align:center;">
                    <i class="fas fa-stethoscope" style="color:#F5821F;font-size:32px;margin-bottom:14px;display:block;"></i>
                    <h3 style="font-family:Montserrat;font-weight:800;color:#fff;font-size:17px;margin-bottom:8px;">Need Medical Advice?</h3>
                    <p style="font-family:Ubuntu;color:rgba(255,255,255,0.7);font-size:13px;margin-bottom:18px;">Consult our expert doctors at Bilal Hospital.</p>
                    <a href="{{ route('appointment') }}" class="btn-primary" style="width:100%;justify-content:center;">Book Appointment</a>
                    <a href="tel:+919699911101" style="display:block;margin-top:10px;color:rgba(255,255,255,0.7);font-family:Ubuntu;font-size:13px;text-decoration:none;">
                        <i class="fas fa-phone mr-2"></i>9699 911101
                    </a>
                </div>

                {{-- Related Articles --}}
                @if($related->count())
                <div style="background:#fff;border-radius:12px;padding:24px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:16px;margin-bottom:18px;">Related Articles</h3>
                    <div class="space-y-4">
                        @foreach($related as $r)
                        <a href="{{ route('blog.show', $r->slug) }}" style="display:flex;gap:12px;align-items:flex-start;text-decoration:none;group:true;">
                            <div style="width:64px;height:64px;border-radius:8px;overflow:hidden;flex-shrink:0;background:#F7F9FC;">
                                @if($r->featured_image)
                                <img src="{{ asset('storage/' . $r->featured_image) }}" alt="{{ $r->title }}" style="width:100%;height:100%;object-fit:cover;" loading="lazy" width="64" height="64">
                                @else
                                <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;"><i class="fas fa-newspaper" style="color:#1B3A7A;opacity:0.2;"></i></div>
                                @endif
                            </div>
                            <div>
                                <h4 style="font-family:Montserrat;font-weight:600;font-size:12px;color:#1B3A7A;line-height:1.4;margin-bottom:4px;">{{ Str::limit($r->title, 60) }}</h4>
                                @if($r->published_at)
                                <span style="font-family:Ubuntu;font-size:11px;color:#9ca3af;">{{ $r->published_at->format('M d, Y') }}</span>
                                @endif
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Departments Quick Links --}}
                <div style="background:#F7F9FC;border-radius:12px;padding:24px;">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:16px;margin-bottom:16px;">Our Departments</h3>
                    @php
                    $deptLinks = ['General Medicine','Orthopedics','Cardiology','Maternity','Pediatrics','ICU'];
                    @endphp
                    @foreach($deptLinks as $d)
                    <a href="{{ route('departments') }}" style="display:flex;align-items:center;gap:8px;padding:8px 0;border-bottom:1px solid #e5e7eb;text-decoration:none;font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
                        <i class="fas fa-angle-right" style="color:#F5821F;font-size:11px;"></i> {{ $d }}
                    </a>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection
