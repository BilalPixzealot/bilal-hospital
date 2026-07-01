@extends('layouts.app')
@section('title', 'Book Appointment – Bilal Hospital Mumbra')
@section('meta_description', 'Book an appointment online at Bilal Hospital, Mumbra. Expert consultants available 24x7 across 24 specialities.')

@section('content')

{{-- Page Hero --}}
<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Schedule a Visit</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">Book an Appointment</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">Expert consultants across 24 specialities — available 24×7</p>
    </div>
</div>

{{-- Breadcrumb --}}
<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="{{ route('home') }}" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>Book Appointment</span>
        </p>
    </div>
</div>

<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-3 gap-12 items-start">

            {{-- Form --}}
            <div class="lg:col-span-2" data-aos="fade-right">

                @if(session('success'))
                <div style="background:#f0fdf4;border:1px solid #bbf7d0;color:#15803d;border-radius:8px;padding:14px 18px;margin-bottom:24px;display:flex;align-items:center;gap:10px;font-family:Ubuntu;font-size:14px;">
                    <i class="fas fa-check-circle text-xl"></i><span>{{ session('success') }}</span>
                </div>
                @endif

                <div style="background:#fff;border-radius:12px;padding:40px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <p class="section-tag">New Appointment</p>
                    <h2 class="section-title" style="font-size:1.8rem;">Schedule Your Consultation</h2>
                    <div class="section-divider"></div>

                    <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">PATIENT NAME *</label>
                                <input type="text" name="patient_name" required value="{{ old('patient_name') }}"
                                    style="width:100%;border:2px solid {{ $errors->has('patient_name') ? '#ef4444' : '#e5e7eb' }};border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;box-sizing:border-box;"
                                    onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                                    placeholder="Full Name">
                                @error('patient_name')<p style="font-family:Ubuntu;font-size:12px;color:#ef4444;margin-top:4px;">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">PHONE NUMBER *</label>
                                <input type="tel" name="phone" required value="{{ old('phone') }}"
                                    style="width:100%;border:2px solid {{ $errors->has('phone') ? '#ef4444' : '#e5e7eb' }};border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;box-sizing:border-box;"
                                    onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                                    placeholder="10-digit mobile number">
                                @error('phone')<p style="font-family:Ubuntu;font-size:12px;color:#ef4444;margin-top:4px;">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div>
                            <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">EMAIL ADDRESS</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                style="width:100%;border:2px solid #e5e7eb;border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;box-sizing:border-box;"
                                onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                                placeholder="your@email.com">
                        </div>

                        <div>
                            <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">DEPARTMENT *</label>
                            <select name="department_id" required id="dept-select"
                                style="width:100%;border:2px solid {{ $errors->has('department_id') ? '#ef4444' : '#e5e7eb' }};border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;box-sizing:border-box;background:#fff;">
                                <option value="">Select Department</option>
                                @foreach($departments as $dept)
                                <option value="{{ $dept->id }}" {{ old('department_id') == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')<p style="font-family:Ubuntu;font-size:12px;color:#ef4444;margin-top:4px;">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">PREFERRED DOCTOR</label>
                            <select name="doctor_id" id="doctor-select"
                                style="width:100%;border:2px solid #e5e7eb;border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;box-sizing:border-box;background:#fff;">
                                <option value="">Select Department first</option>
                            </select>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">PREFERRED DATE *</label>
                                <input type="date" name="preferred_date" required min="{{ date('Y-m-d') }}" value="{{ old('preferred_date') }}"
                                    style="width:100%;border:2px solid {{ $errors->has('preferred_date') ? '#ef4444' : '#e5e7eb' }};border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;box-sizing:border-box;">
                                @error('preferred_date')<p style="font-family:Ubuntu;font-size:12px;color:#ef4444;margin-top:4px;">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">PREFERRED TIME *</label>
                                <select name="preferred_time" required
                                    style="width:100%;border:2px solid {{ $errors->has('preferred_time') ? '#ef4444' : '#e5e7eb' }};border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;box-sizing:border-box;background:#fff;">
                                    <option value="">Select Time Slot</option>
                                    <option value="Morning OPD (8am - 1pm)">Morning OPD (8am – 1pm)</option>
                                    <option value="Evening OPD (5pm - 9pm)">Evening OPD (5pm – 9pm)</option>
                                    <option value="Emergency (Any Time)">Emergency (Any Time)</option>
                                </select>
                                @error('preferred_time')<p style="font-family:Ubuntu;font-size:12px;color:#ef4444;margin-top:4px;">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div>
                            <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">MESSAGE / SYMPTOMS</label>
                            <textarea name="message" rows="4"
                                style="width:100%;border:2px solid #e5e7eb;border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;resize:vertical;box-sizing:border-box;"
                                onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                                placeholder="Briefly describe your symptoms or reason for visit...">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="btn-primary" style="width:100%;justify-content:center;font-size:14px;padding:16px 32px;">
                            <i class="fas fa-calendar-plus"></i> Submit Appointment Request
                        </button>
                    </form>
                </div>
            </div>

            {{-- Sidebar --}}
            <div data-aos="fade-left" class="space-y-6">
                {{-- Emergency --}}
                <div style="background:linear-gradient(135deg,#1B3A7A,#122550);border-radius:12px;padding:28px;text-align:center;">
                    <i class="fas fa-ambulance" style="color:#F5821F;font-size:36px;margin-bottom:14px;display:block;"></i>
                    <h3 style="font-family:Montserrat;font-weight:800;color:#fff;font-size:18px;margin-bottom:10px;">Emergency?</h3>
                    <p style="font-family:Ubuntu;color:rgba(255,255,255,0.7);font-size:13px;margin-bottom:16px;">For medical emergencies, call immediately.</p>
                    <a href="tel:+919699911101" style="display:block;background:#F5821F;color:#fff;font-family:Montserrat;font-weight:800;font-size:20px;padding:14px;border-radius:8px;text-decoration:none;">9699 911101</a>
                </div>

                {{-- OPD Timings --}}
                <div style="background:#fff;border-radius:12px;padding:28px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:16px;margin-bottom:18px;">OPD Timings</h3>
                    <div class="space-y-3">
                        @php
                        $timings = [
                            ['label'=>'Morning OPD','time'=>'8:00 AM – 1:00 PM'],
                            ['label'=>'Evening OPD','time'=>'5:00 PM – 9:00 PM'],
                            ['label'=>'Emergency','time'=>'24 Hours × 7 Days'],
                        ];
                        @endphp
                        @foreach($timings as $t)
                        <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid #f0f0f0;">
                            <div style="display:flex;align-items:center;gap:10px;">
                                <i class="fas fa-clock" style="color:#F5821F;font-size:14px;"></i>
                                <span style="font-family:Montserrat;font-weight:600;font-size:13px;color:#1B3A7A;">{{ $t['label'] }}</span>
                            </div>
                            <span style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">{{ $t['time'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Why Us --}}
                <div style="background:#F7F9FC;border-radius:12px;padding:28px;">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:16px;margin-bottom:18px;">Why Choose Us?</h3>
                    @php
                    $reasons = ['24×7 Emergency Services','Expert Panel of 50+ Doctors','ISO 9001:2015 Certified','Cashless Insurance Facility','Advanced Diagnostics','NABH Pre-Accredited'];
                    @endphp
                    @foreach($reasons as $r)
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px;">
                        <i class="fas fa-check-circle" style="color:#F5821F;font-size:14px;flex-shrink:0;"></i>
                        <span style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">{{ $r }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
document.getElementById('dept-select').addEventListener('change', function() {
    const deptId = this.value;
    const doctorSelect = document.getElementById('doctor-select');
    doctorSelect.innerHTML = '<option value="">Loading...</option>';
    if (!deptId) { doctorSelect.innerHTML = '<option value="">Select Department first</option>'; return; }
    fetch(`/api/doctors/${deptId}`)
        .then(r => r.json())
        .then(doctors => {
            doctorSelect.innerHTML = '<option value="">Any Available Doctor</option>';
            doctors.forEach(d => { doctorSelect.innerHTML += `<option value="${d.id}">${d.name} — ${d.designation}</option>`; });
        });
});
</script>
@endsection
