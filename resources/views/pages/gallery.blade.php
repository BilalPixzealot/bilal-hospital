@extends('layouts.app')
@section('title', 'Gallery – Bilal Hospital Mumbra')
@section('meta_description', 'View photos of Bilal Hospital facilities including ICU, Operation Theatre, Wards, NICU and more.')

@section('content')

{{-- Page Hero --}}
<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Visual Tour</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">Our Gallery</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">Explore our world-class facilities, operation theatres, wards and more</p>
    </div>
</div>

{{-- Breadcrumb --}}
<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="{{ route('home') }}" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>Gallery</span>
        </p>
    </div>
</div>

<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">

        {{-- Filter Tabs --}}
        @if(count($categories))
        <div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:center;margin-bottom:40px;" data-aos="fade-up">
            @foreach($categories as $cat)
            <a href="{{ route('gallery', ['category' => $cat]) }}"
                style="display:inline-block;padding:10px 22px;border-radius:4px;font-family:Montserrat;font-size:12px;font-weight:700;letter-spacing:0.5px;text-decoration:none;transition:all 0.2s;
                {{ $activeCategory === $cat ? 'background:#1B3A7A;color:#fff;' : 'background:#fff;color:#1B3A7A;border:2px solid #e5e7eb;' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>
        @endif

        @if($images->count())
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="gallery-grid">
            @foreach($images as $img)
            <div style="overflow:hidden;border-radius:10px;cursor:pointer;position:relative;box-shadow:0 2px 12px rgba(0,0,0,0.08);"
                 data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 50 }}"
                 onclick="openLightbox('{{ asset('storage/' . $img->image) }}', '{{ $img->title ?? '' }}')">
                <img src="{{ asset('storage/' . $img->image) }}"
                     alt="{{ $img->title ?? 'Hospital Gallery' }}"
                     style="width:100%;height:200px;object-fit:cover;display:block;transition:transform 0.5s;"
                     onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'"
                     loading="lazy" width="300" height="200">
                @if($img->title)
                <div style="position:absolute;bottom:0;left:0;right:0;background:linear-gradient(transparent,rgba(18,37,80,0.85));padding:20px 12px 10px;pointer-events:none;">
                    <p style="font-family:Montserrat;font-weight:600;font-size:12px;color:#fff;">{{ $img->title }}</p>
                </div>
                @endif
                <div style="position:absolute;inset:0;background:rgba(27,58,122,0);transition:background 0.3s;display:flex;align-items:center;justify-content:center;"
                     onmouseover="this.style.background='rgba(27,58,122,0.3)'" onmouseout="this.style.background='rgba(27,58,122,0)'">
                    <i class="fas fa-search-plus" style="color:#fff;font-size:24px;opacity:0;transition:opacity 0.3s;"
                       onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'"></i>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-24">
            <i class="fas fa-images" style="color:#1B3A7A;opacity:0.12;font-size:72px;margin-bottom:20px;display:block;"></i>
            <p style="font-family:Montserrat;font-weight:600;color:#6b6b6b;">Gallery photos coming soon. Check back later.</p>
        </div>
        @endif
    </div>
</section>

{{-- Lightbox --}}
<div id="lightbox" style="position:fixed;inset:0;background:rgba(0,0,0,0.92);z-index:9999;display:none;align-items:center;justify-content:center;" onclick="closeLightbox()">
    <div style="max-width:900px;width:100%;margin:0 20px;" onclick="event.stopPropagation()">
        <img id="lightbox-img" src="" alt="" style="width:100%;max-height:80vh;object-fit:contain;border-radius:8px;">
        <p id="lightbox-caption" style="font-family:Ubuntu;color:#fff;text-align:center;margin-top:12px;font-size:14px;"></p>
    </div>
    <button onclick="closeLightbox()" style="position:absolute;top:24px;right:24px;background:rgba(255,255,255,0.15);color:#fff;border:none;width:44px;height:44px;border-radius:50%;cursor:pointer;font-size:18px;">
        <i class="fas fa-times"></i>
    </button>
</div>

@endsection

@section('scripts')
<script>
function openLightbox(src, caption) {
    document.getElementById('lightbox-img').src = src;
    document.getElementById('lightbox-caption').textContent = caption;
    const lb = document.getElementById('lightbox');
    lb.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}
function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
    document.body.style.overflow = '';
}
document.addEventListener('keydown', function(e) { if (e.key === 'Escape') closeLightbox(); });
</script>
@endsection
