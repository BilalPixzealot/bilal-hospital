@extends('layouts.app')
@section('title', $department->name . ' – Bilal Hospital Mumbra')
@section('meta_description', $department->short_description)

@section('content')

{{-- Page Hero --}}
<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Specialised Care</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">{{ $department->name }}</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        @if($department->short_description)
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;max-width:600px;margin:0 auto;">{{ $department->short_description }}</p>
        @endif
    </div>
</div>

{{-- Breadcrumb --}}
<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="{{ route('home') }}" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <a href="{{ route('departments') }}" style="color:#1B3A7A;">Departments</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>{{ $department->name }}</span>
        </p>
    </div>
</div>

<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-3 gap-10">

            {{-- Main Content --}}
            <div class="lg:col-span-2" data-aos="fade-right">

                {{-- About Department --}}
                <div style="background:#fff;border-radius:12px;padding:36px;box-shadow:0 2px 20px rgba(27,58,122,0.07);margin-bottom:24px;">
                    <p class="section-tag">About This Department</p>
                    <h2 class="section-title" style="font-size:1.8rem;">{{ $department->name }}</h2>
                    <div class="section-divider"></div>
                    @if($department->description)
                    <div style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.9;">
                        {!! nl2br(e($department->description)) !!}
                    </div>
                    @elseif($department->short_description)
                    <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.9;">{{ $department->short_description }}</p>
                    @endif
                </div>

                {{-- Doctors in this Department --}}
                @if($doctors->count())
                <div style="background:#fff;border-radius:12px;padding:36px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:20px;margin-bottom:24px;">Our {{ $department->name }} Specialists</h3>
                    <div class="grid sm:grid-cols-2 gap-4">
                        @foreach($doctors as $doctor)
                        <a href="{{ route('doctors.show', $doctor->slug) }}"
                           style="display:flex;gap:14px;align-items:center;padding:16px;background:#F7F9FC;border-radius:8px;text-decoration:none;transition:all 0.2s;border:2px solid transparent;"
                           onmouseover="this.style.borderColor='#F5821F';this.style.background='#fff';"
                           onmouseout="this.style.borderColor='transparent';this.style.background='#F7F9FC';">
                            <div style="width:52px;height:52px;background:rgba(27,58,122,0.08);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                @if($doctor->photo)
                                <img src="{{ asset('storage/'.$doctor->photo) }}" alt="{{ $doctor->name }}" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                                @else
                                <i class="fas fa-user-md" style="color:#1B3A7A;font-size:20px;"></i>
                                @endif
                            </div>
                            <div>
                                <h4 style="font-family:Montserrat;font-weight:700;font-size:13px;color:#1B3A7A;margin-bottom:3px;">{{ $doctor->name }}</h4>
                                <p style="font-family:Ubuntu;font-size:12px;color:#F5821F;margin-bottom:2px;">{{ $doctor->designation }}</p>
                                <p style="font-family:Ubuntu;font-size:11px;color:#9ca3af;">{{ Str::limit($doctor->qualifications, 40) }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            {{-- Sidebar --}}
            <div data-aos="fade-left" class="space-y-6">

                {{-- Book Appointment --}}
                <div style="background:linear-gradient(135deg,#1B3A7A,#122550);border-radius:12px;padding:28px;">
                    <i class="fas fa-calendar-check" style="color:#F5821F;font-size:32px;margin-bottom:14px;display:block;"></i>
                    <h3 style="font-family:Montserrat;font-weight:800;color:#fff;font-size:17px;margin-bottom:8px;">Book a Consultation</h3>
                    <p style="font-family:Ubuntu;color:rgba(255,255,255,0.7);font-size:13px;margin-bottom:20px;">Schedule a consultation with our {{ $department->name }} specialist.</p>
                    <a href="{{ route('appointment') }}?dept={{ $department->id }}" class="btn-primary" style="width:100%;justify-content:center;">Book Now</a>
                    <a href="tel:+919699911101" style="display:block;margin-top:10px;text-align:center;color:rgba(255,255,255,0.65);font-family:Ubuntu;font-size:13px;text-decoration:none;">
                        <i class="fas fa-phone mr-2"></i>9699 911101
                    </a>
                </div>

                {{-- Emergency --}}
                <div style="background:#FEF2F2;border:2px solid #FECACA;border-radius:12px;padding:24px;text-align:center;">
                    <i class="fas fa-ambulance" style="color:#DC2626;font-size:28px;margin-bottom:10px;display:block;"></i>
                    <h4 style="font-family:Montserrat;font-weight:700;color:#DC2626;font-size:15px;margin-bottom:6px;">Emergency Line</h4>
                    <a href="tel:+919699911101" style="font-family:Montserrat;font-weight:900;color:#DC2626;font-size:20px;text-decoration:none;display:block;">9699 911101</a>
                    <p style="font-family:Ubuntu;font-size:12px;color:#ef4444;margin-top:6px;">24×7 Available</p>
                </div>

                {{-- All Departments --}}
                <div style="background:#fff;border-radius:12px;padding:24px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:15px;margin-bottom:16px;">Explore All Departments</h3>
                    <a href="{{ route('departments') }}" class="btn-navy" style="width:100%;justify-content:center;">
                        <i class="fas fa-th"></i> View All 24 Departments
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
