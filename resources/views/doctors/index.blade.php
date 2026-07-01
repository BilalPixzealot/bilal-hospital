@extends('layouts.app')
@section('title','Our Doctors – Expert Consultants at Bilal Hospital Mumbra')
@section('meta_description','Meet the expert team of doctors and consultants at Bilal Hospital, Mumbra. Specialists in ICU, Maternity, Cardiology, Orthopedics, and more.')

@section('content')

{{-- Page Hero --}}
<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Our Team</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">Expert Consultants</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">Highly qualified specialists across 24 departments</p>
    </div>
</div>

{{-- Breadcrumb --}}
<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="{{ route('home') }}" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>Our Doctors</span>
        </p>
    </div>
</div>

<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">

        {{-- Filter --}}
        <form method="GET" class="mb-12 flex gap-4 flex-wrap justify-center" data-aos="fade-up">
            <select name="department" onchange="this.form.submit()"
                style="font-family:Montserrat;font-weight:600;font-size:13px;color:#1B3A7A;border:2px solid #e5e7eb;border-radius:6px;padding:10px 18px;background:#fff;cursor:pointer;outline:none;">
                <option value="">All Departments</option>
                @foreach($departments as $dept)
                <option value="{{ $dept->id }}" {{ request('department') == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                @endforeach
            </select>
        </form>

        @if($doctors->count())
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($doctors as $doctor)
            <div class="doc-card" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 75 }}">
                <div class="doc-img">
                    @if($doctor->photo)
                    <img src="{{ asset('storage/'.$doctor->photo) }}" alt="{{ $doctor->name }}" loading="lazy" width="220" height="180">
                    @else
                    <i class="fas fa-user-md text-5xl" style="color:#1B3A7A;opacity:0.25;"></i>
                    @endif
                    <div class="doc-tag">
                        <p style="font-family:Montserrat;font-size:11px;font-weight:700;color:rgba(255,255,255,0.8);">{{ $doctor->designation }}</p>
                    </div>
                </div>
                <div style="padding:18px;">
                    <h3 style="font-family:Montserrat;font-weight:700;font-size:14px;color:#1B3A7A;margin-bottom:4px;">{{ $doctor->name }}</h3>
                    @if($doctor->department)
                    <p style="font-family:Ubuntu;font-size:12px;color:#F5821F;font-weight:500;margin-bottom:4px;">{{ $doctor->department->name }}</p>
                    @endif
                    <p style="font-family:Ubuntu;font-size:12px;color:#6b6b6b;margin-bottom:14px;" class="line-clamp-2">{{ $doctor->qualifications }}</p>
                    <a href="{{ route('appointment') }}" class="btn-primary" style="font-size:11px;padding:8px 16px;justify-content:center;width:100%;display:flex;">
                        Book Appointment
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-16">
            <i class="fas fa-user-md fa-4x mb-4" style="color:#1B3A7A;opacity:0.15;"></i>
            <p style="font-family:Montserrat;font-weight:600;color:#6b6b6b;">No doctors found for the selected department.</p>
        </div>
        @endif
    </div>
</section>

@endsection
