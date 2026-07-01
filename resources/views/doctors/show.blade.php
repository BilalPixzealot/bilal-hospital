@extends('layouts.app')
@section('title', $doctor->name . ' – ' . $doctor->designation . ' | Bilal Hospital')
@section('meta_description', $doctor->name . ', ' . $doctor->qualifications . '. Consultant at Bilal Hospital, Mumbra.')

@section('content')

{{-- Page Hero --}}
<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Our Specialist</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(1.8rem,4vw,3rem);color:#fff;margin-bottom:12px;">{{ $doctor->name }}</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 16px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">{{ $doctor->designation }}{{ $doctor->department ? ' · ' . $doctor->department->name : '' }}</p>
    </div>
</div>

{{-- Breadcrumb --}}
<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="{{ route('home') }}" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <a href="{{ route('doctors') }}" style="color:#1B3A7A;">Doctors</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>{{ $doctor->name }}</span>
        </p>
    </div>
</div>

<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-3 gap-10">

            {{-- Doctor Profile --}}
            <div class="lg:col-span-2" data-aos="fade-right">

                {{-- Profile Card --}}
                <div style="background:#fff;border-radius:12px;padding:36px;box-shadow:0 2px 20px rgba(27,58,122,0.07);display:flex;gap:28px;align-items:flex-start;flex-wrap:wrap;margin-bottom:24px;">
                    <div style="width:120px;height:120px;border-radius:50%;overflow:hidden;flex-shrink:0;background:rgba(27,58,122,0.06);display:flex;align-items:center;justify-content:center;border:4px solid #F5821F;">
                        @if($doctor->photo)
                        <img src="{{ asset('storage/' . $doctor->photo) }}" alt="{{ $doctor->name }}" style="width:100%;height:100%;object-fit:cover;" width="120" height="120">
                        @else
                        <i class="fas fa-user-md" style="color:#1B3A7A;font-size:48px;"></i>
                        @endif
                    </div>
                    <div style="flex:1;min-width:200px;">
                        <h2 style="font-family:Montserrat;font-weight:900;color:#1B3A7A;font-size:clamp(1.4rem,3vw,2rem);margin-bottom:6px;">{{ $doctor->name }}</h2>
                        <p style="font-family:Ubuntu;color:#F5821F;font-size:15px;font-weight:500;margin-bottom:4px;">{{ $doctor->designation }}</p>
                        @if($doctor->department)
                        <p style="font-family:Ubuntu;color:#6b6b6b;font-size:14px;margin-bottom:16px;">{{ $doctor->department->name }}</p>
                        @endif
                        <div style="display:flex;flex-wrap:wrap;gap:8px;">
                            @foreach(explode(',', $doctor->qualifications) as $qual)
                            <span style="background:rgba(27,58,122,0.07);color:#1B3A7A;font-family:Montserrat;font-size:11px;font-weight:700;padding:5px 12px;border-radius:20px;">{{ trim($qual) }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Bio --}}
                @if($doctor->bio)
                <div style="background:#fff;border-radius:12px;padding:36px;box-shadow:0 2px 20px rgba(27,58,122,0.07);margin-bottom:24px;">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:18px;margin-bottom:6px;">About Dr. {{ explode(' ', $doctor->name)[1] ?? $doctor->name }}</h3>
                    <div style="width:40px;height:3px;background:#F5821F;border-radius:2px;margin-bottom:20px;"></div>
                    <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.9;">{{ $doctor->bio }}</p>
                </div>
                @endif

                {{-- OPD Schedule --}}
                @if($doctor->opd_days || $doctor->opd_timing)
                <div style="background:#fff;border-radius:12px;padding:36px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:18px;margin-bottom:6px;">OPD Schedule</h3>
                    <div style="width:40px;height:3px;background:#F5821F;border-radius:2px;margin-bottom:24px;"></div>
                    <div class="grid sm:grid-cols-2 gap-6">
                        @if($doctor->opd_days)
                        <div style="display:flex;gap:12px;align-items:flex-start;">
                            <div style="width:44px;height:44px;background:rgba(245,130,31,0.1);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="fas fa-calendar-alt" style="color:#F5821F;font-size:18px;"></i>
                            </div>
                            <div>
                                <p style="font-family:Montserrat;font-weight:700;font-size:12px;color:#1B3A7A;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.5px;">Days</p>
                                <p style="font-family:Ubuntu;font-size:14px;color:#6b6b6b;">{{ $doctor->opd_days }}</p>
                            </div>
                        </div>
                        @endif
                        @if($doctor->opd_timing)
                        <div style="display:flex;gap:12px;align-items:flex-start;">
                            <div style="width:44px;height:44px;background:rgba(245,130,31,0.1);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="fas fa-clock" style="color:#F5821F;font-size:18px;"></i>
                            </div>
                            <div>
                                <p style="font-family:Montserrat;font-weight:700;font-size:12px;color:#1B3A7A;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.5px;">Timing</p>
                                <p style="font-family:Ubuntu;font-size:14px;color:#6b6b6b;">{{ $doctor->opd_timing }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif
            </div>

            {{-- Sidebar --}}
            <div data-aos="fade-left" class="space-y-6">

                {{-- Book Appointment --}}
                <div style="background:linear-gradient(135deg,#1B3A7A,#122550);border-radius:12px;padding:28px;text-align:center;">
                    <i class="fas fa-calendar-check" style="color:#F5821F;font-size:32px;margin-bottom:14px;display:block;"></i>
                    <h3 style="font-family:Montserrat;font-weight:800;color:#fff;font-size:17px;margin-bottom:8px;">Book Appointment</h3>
                    <p style="font-family:Ubuntu;color:rgba(255,255,255,0.7);font-size:13px;margin-bottom:20px;">Schedule a consultation with {{ $doctor->name }}.</p>
                    <a href="{{ route('appointment') }}" class="btn-primary" style="width:100%;justify-content:center;">Book Now</a>
                    <a href="tel:+919699911101" style="display:block;margin-top:12px;background:rgba(255,255,255,0.12);color:#fff;font-family:Montserrat;font-weight:600;font-size:13px;padding:12px;border-radius:6px;text-decoration:none;border:1px solid rgba(255,255,255,0.2);">
                        <i class="fas fa-phone mr-2"></i>9699 911101
                    </a>
                </div>

                {{-- Department Info --}}
                @if($doctor->department)
                <div style="background:#fff;border-radius:12px;padding:24px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:15px;margin-bottom:16px;">Department</h3>
                    <a href="{{ route('departments.show', $doctor->department->slug) }}"
                       style="display:flex;align-items:center;gap:12px;text-decoration:none;padding:14px;background:#F7F9FC;border-radius:8px;border:2px solid transparent;transition:all 0.2s;"
                       onmouseover="this.style.borderColor='#1B3A7A'" onmouseout="this.style.borderColor='transparent'">
                        <div style="width:40px;height:40px;background:rgba(27,58,122,0.1);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="fas fa-stethoscope" style="color:#1B3A7A;font-size:16px;"></i>
                        </div>
                        <div>
                            <p style="font-family:Montserrat;font-weight:700;font-size:13px;color:#1B3A7A;margin-bottom:2px;">{{ $doctor->department->name }}</p>
                            <p style="font-family:Ubuntu;font-size:12px;color:#F5821F;">View Department →</p>
                        </div>
                    </a>
                </div>
                @endif

                {{-- All Doctors --}}
                <div style="background:#F7F9FC;border-radius:12px;padding:24px;">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:15px;margin-bottom:14px;">Our Team</h3>
                    <a href="{{ route('doctors') }}" class="btn-navy" style="width:100%;justify-content:center;">
                        <i class="fas fa-users"></i> View All Doctors
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
