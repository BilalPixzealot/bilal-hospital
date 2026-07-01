<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Bilal Hospital') | Multispecialty Hospital, Mumbra</title>
    <meta name="description" content="@yield('meta_description', 'Bilal Hospital is a 50-bedded multispecialty hospital in Mumbra, Thane with well-equipped ICU, NICU, OT and diagnostic centre.')">
    <meta property="og:title" content="@yield('title', 'Bilal Hospital')">
    <meta property="og:description" content="@yield('meta_description', 'Bilal Hospital - Multispecialty Hospital in Mumbra, Thane')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Fonts: Montserrat + Ubuntu --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary:       '#1B3A7A',
                        'primary-dark':'#122550',
                        'primary-light':'#2650A8',
                        accent:        '#F5821F',
                        'accent-dark': '#D96A0A',
                        'body-text':   '#6b6b6b',
                    },
                    fontFamily: {
                        sans:    ['Ubuntu', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    @yield('head')

    <style>
        * { box-sizing: border-box; }
        body  { font-family: 'Ubuntu', sans-serif; color: #6b6b6b; font-size: 15px; line-height: 1.7; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Montserrat', sans-serif; color: #1B3A7A; }

        /* ---------- Header ---------- */
        .site-header { transition: all 0.35s ease; }
        .site-header.scrolled { background: #fff !important; box-shadow: 0 2px 24px rgba(27,58,122,0.1); }
        .site-header.scrolled .nav-link { color: #1B3A7A !important; }
        .site-header.scrolled .nav-link:hover { color: #F5821F !important; }
        .site-header.scrolled .logo-text { color: #1B3A7A !important; }
        .site-header.scrolled .logo-sub  { color: #6b6b6b !important; }
        .site-header.scrolled .mobile-btn { color: #1B3A7A !important; }

        /* Dropdown */
        .nav-dropdown { display: none; }
        .nav-item:hover .nav-dropdown { display: block; }

        /* ---------- Section Headings ---------- */
        .section-tag {
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #F5821F;
            margin-bottom: 10px;
        }
        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            color: #1B3A7A;
            line-height: 1.2;
        }
        .section-divider {
            width: 50px;
            height: 4px;
            background: #F5821F;
            border-radius: 2px;
            margin: 16px 0 20px;
        }
        .section-divider.center { margin: 16px auto 20px; }

        /* ---------- Buttons ---------- */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #F5821F;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 14px 32px;
            border-radius: 4px;
            border: 2px solid #F5821F;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-primary:hover { background: #D96A0A; border-color: #D96A0A; color: #fff; }
        .btn-outline {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 12px 30px;
            border-radius: 4px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-outline:hover { background: #fff; color: #1B3A7A; }
        .btn-navy {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #1B3A7A;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 14px 32px;
            border-radius: 4px;
            border: 2px solid #1B3A7A;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-navy:hover { background: #122550; border-color: #122550; }

        /* ---------- Cards ---------- */
        .dept-card {
            background: #fff;
            border-radius: 8px;
            padding: 32px 24px;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
            box-shadow: 0 2px 15px rgba(27,58,122,0.06);
        }
        .dept-card:hover {
            border-bottom-color: #F5821F;
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(27,58,122,0.12);
        }
        .doctor-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 15px rgba(27,58,122,0.06);
        }
        .doctor-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(27,58,122,0.12); }

        /* ---------- Hero ---------- */
        .hero-overlay { background: linear-gradient(135deg, rgba(27,58,122,0.90) 0%, rgba(18,37,80,0.80) 100%); }

        /* ---------- Page Hero ---------- */
        .page-hero {
            background: linear-gradient(135deg, #1B3A7A 0%, #122550 100%);
            padding: 80px 0 60px;
        }

        /* ---------- Counter ---------- */
        .counter-num { font-variant-numeric: tabular-nums; }

        /* ---------- Hero Slider ---------- */
        .hero-slide { display: none; }
        .hero-slide.active { display: flex; }

        /* ---------- WhatsApp pulse ---------- */
        @keyframes pulse-ring {
            0%   { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(37,211,102,0.7); }
            70%  { transform: scale(1);    box-shadow: 0 0 0 10px rgba(37,211,102,0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(37,211,102,0); }
        }
        .whatsapp-pulse { animation: pulse-ring 2s infinite; }

        /* ---------- Testimonial ---------- */
        .testimonial-card { border-left: 4px solid #F5821F; }

        /* ---------- Scroll reveal ---------- */
        [data-aos] { transition-timing-function: cubic-bezier(0.4,0,0.2,1) !important; }
    </style>
</head>
<body class="bg-white">

{{-- ===== HEADER ===== --}}
<header id="main-header" class="site-header fixed top-0 left-0 right-0 z-50 bg-transparent">
    <div class="max-w-7xl mx-auto px-5">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="w-11 h-11 bg-white rounded-full flex items-center justify-center shadow">
                    <span style="font-family:Montserrat;font-weight:900;font-size:18px;color:#1B3A7A;">B</span>
                </div>
                <div>
                    <div class="logo-text font-heading font-bold text-[17px] leading-tight text-white" style="letter-spacing:0.5px;">BILAL HOSPITAL</div>
                    <div class="logo-sub text-[10px] text-orange-300 font-heading font-semibold uppercase tracking-widest">Mumbra, Thane</div>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden lg:flex items-center gap-1">
                <a href="{{ route('home') }}" class="nav-link text-white hover:text-orange-300 px-3 py-2 text-[13px] font-heading font-semibold tracking-wide transition-colors {{ request()->routeIs('home') ? 'text-orange-300' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link text-white hover:text-orange-300 px-3 py-2 text-[13px] font-heading font-semibold tracking-wide transition-colors {{ request()->routeIs('about') ? 'text-orange-300' : '' }}">About</a>

                {{-- Departments --}}
                <div class="nav-item relative">
                    <a href="{{ route('departments') }}" class="nav-link text-white hover:text-orange-300 px-3 py-2 text-[13px] font-heading font-semibold tracking-wide transition-colors flex items-center gap-1 {{ request()->routeIs('departments*') ? 'text-orange-300' : '' }}">
                        Departments <i class="fas fa-chevron-down text-[10px] mt-px"></i>
                    </a>
                    <div class="nav-dropdown absolute top-full left-0 w-64 bg-white shadow-2xl rounded-lg py-2 z-50 max-h-96 overflow-y-auto">
                        @php $navDepts = \App\Models\Department::where('is_active', true)->orderBy('sort_order')->get(['name','slug']) @endphp
                        @foreach($navDepts as $dept)
                        <a href="{{ route('departments.show', $dept->slug) }}" class="block px-4 py-2 text-[13px] text-gray-700 font-sans hover:bg-primary hover:text-white transition-colors">{{ $dept->name }}</a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('doctors') }}" class="nav-link text-white hover:text-orange-300 px-3 py-2 text-[13px] font-heading font-semibold tracking-wide transition-colors {{ request()->routeIs('doctors*') ? 'text-orange-300' : '' }}">Doctors</a>
                <a href="{{ route('cashless') }}" class="nav-link text-white hover:text-orange-300 px-3 py-2 text-[13px] font-heading font-semibold tracking-wide transition-colors {{ request()->routeIs('cashless') ? 'text-orange-300' : '' }}">Cashless</a>
                <a href="{{ route('gallery') }}" class="nav-link text-white hover:text-orange-300 px-3 py-2 text-[13px] font-heading font-semibold tracking-wide transition-colors {{ request()->routeIs('gallery') ? 'text-orange-300' : '' }}">Gallery</a>
                <a href="{{ route('contact') }}" class="nav-link text-white hover:text-orange-300 px-3 py-2 text-[13px] font-heading font-semibold tracking-wide transition-colors {{ request()->routeIs('contact') ? 'text-orange-300' : '' }}">Contact</a>
                <a href="{{ route('appointment') }}" class="ml-3 btn-primary py-[10px] px-6 text-[12px]">
                    <i class="fas fa-calendar-check"></i> Book Appointment
                </a>
            </nav>

            {{-- Mobile burger --}}
            <button id="mobile-menu-btn" class="lg:hidden text-white p-2 mobile-btn">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden lg:hidden bg-primary-dark border-t border-blue-800">
        <div class="max-w-7xl mx-auto px-5 py-4 flex flex-col gap-1">
            <a href="{{ route('home') }}" class="text-white hover:text-orange-300 py-2 text-[13px] font-heading font-semibold">Home</a>
            <a href="{{ route('about') }}" class="text-white hover:text-orange-300 py-2 text-[13px] font-heading font-semibold">About</a>
            <a href="{{ route('departments') }}" class="text-white hover:text-orange-300 py-2 text-[13px] font-heading font-semibold">Departments</a>
            <a href="{{ route('doctors') }}" class="text-white hover:text-orange-300 py-2 text-[13px] font-heading font-semibold">Our Doctors</a>
            <a href="{{ route('cashless') }}" class="text-white hover:text-orange-300 py-2 text-[13px] font-heading font-semibold">Cashless Facility</a>
            <a href="{{ route('gallery') }}" class="text-white hover:text-orange-300 py-2 text-[13px] font-heading font-semibold">Gallery</a>
            <a href="{{ route('blog') }}" class="text-white hover:text-orange-300 py-2 text-[13px] font-heading font-semibold">Health Blog</a>
            <a href="{{ route('contact') }}" class="text-white hover:text-orange-300 py-2 text-[13px] font-heading font-semibold">Contact</a>
            <a href="{{ route('appointment') }}" class="btn-primary mt-2 text-center justify-center">Book Appointment</a>
        </div>
    </div>
</header>

{{-- Main Content (no padding-top — hero sections handle their own top spacing) --}}
@yield('content')

{{-- ===== FOOTER ===== --}}
<footer class="bg-primary-dark text-white pt-16 pb-6">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

            {{-- About --}}
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-11 h-11 bg-accent rounded-full flex items-center justify-center shadow">
                        <span style="font-family:Montserrat;font-weight:900;font-size:18px;color:#fff;">B</span>
                    </div>
                    <div>
                        <div class="font-heading font-bold text-white text-[15px]">BILAL HOSPITAL</div>
                        <div class="text-[10px] text-orange-300 font-heading tracking-widest uppercase">Mumbra, Thane</div>
                    </div>
                </div>
                <p class="text-gray-400 text-[13px] leading-relaxed mb-5">Touching Lives With Caring Hands. A 50-bedded multispecialty hospital providing quality healthcare 24×7.</p>
                <div class="flex gap-2">
                    <a href="#" class="w-9 h-9 bg-white/10 hover:bg-accent rounded flex items-center justify-center transition-colors"><i class="fab fa-facebook-f text-sm"></i></a>
                    <a href="#" class="w-9 h-9 bg-white/10 hover:bg-accent rounded flex items-center justify-center transition-colors"><i class="fab fa-instagram text-sm"></i></a>
                    <a href="#" class="w-9 h-9 bg-white/10 hover:bg-accent rounded flex items-center justify-center transition-colors"><i class="fab fa-youtube text-sm"></i></a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="font-heading font-bold text-white text-[14px] uppercase tracking-wider mb-5">Quick Links</h4>
                <div class="w-8 h-0.5 bg-accent mb-4"></div>
                <ul class="space-y-2">
                    @foreach([['home','Home'],['about','About Us'],['departments','Departments'],['doctors','Our Doctors'],['cashless','Cashless Facility'],['gallery','Gallery'],['blog','Health Blog'],['contact','Contact Us']] as [$r,$label])
                    <li><a href="{{ route($r) }}" class="text-gray-400 hover:text-accent text-[13px] transition-colors flex items-center gap-2"><i class="fas fa-angle-right text-accent text-xs"></i>{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="font-heading font-bold text-white text-[14px] uppercase tracking-wider mb-5">Our Services</h4>
                <div class="w-8 h-0.5 bg-accent mb-4"></div>
                <ul class="space-y-2">
                    @foreach([['icu-general-medicine','ICU & General Medicine'],['maternity-obstetrics','Maternity & Obstetrics'],['gynaecology','Gynaecology'],['nicu','NICU'],['orthopedic-surgery','Orthopedics'],['neuro-surgery','Neuro Surgery'],['diagnostic-centre','Diagnostic Centre'],['accident-burn-trauma-care','Emergency Care']] as [$slug,$label])
                    <li><a href="{{ route('departments.show',$slug) }}" class="text-gray-400 hover:text-accent text-[13px] transition-colors flex items-center gap-2"><i class="fas fa-angle-right text-accent text-xs"></i>{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="font-heading font-bold text-white text-[14px] uppercase tracking-wider mb-5">Contact Info</h4>
                <div class="w-8 h-0.5 bg-accent mb-4"></div>
                <ul class="space-y-4">
                    <li class="flex gap-3 text-[13px] text-gray-400"><i class="fas fa-map-marker-alt text-accent mt-1 shrink-0"></i><span>1st Floor, A Wing, Royal Garden, Old Mumbai-Pune Road, Near Shimla Park, Mumbra, Thane - 400612</span></li>
                    <li class="flex gap-3 text-[13px]"><i class="fas fa-phone text-accent mt-0.5 shrink-0"></i><a href="tel:+919699911101" class="text-gray-400 hover:text-accent transition-colors">9699 911101 / 9867 934366</a></li>
                    <li class="flex gap-3 text-[13px]"><i class="fas fa-clock text-accent mt-0.5 shrink-0"></i><span class="text-gray-400">24×7 Emergency Services</span></li>
                    <li class="flex gap-3 text-[13px]"><i class="fas fa-envelope text-accent mt-0.5 shrink-0"></i><a href="mailto:info@bilal-hospital.com" class="text-gray-400 hover:text-accent transition-colors">info@bilal-hospital.com</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/10 pt-6 flex flex-col md:flex-row justify-between items-center gap-3">
            <p class="text-gray-500 text-[12px]">&copy; {{ date('Y') }} Bilal Hospital. All Rights Reserved. | Mumbra, Thane, Maharashtra</p>
            <div class="flex gap-5 text-[12px] text-gray-500">
                <a href="#" class="hover:text-accent transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-accent transition-colors">Terms of Service</a>
                <a href="{{ route('sitemap') }}" class="hover:text-accent transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

{{-- Floating Buttons --}}
<div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3">
    <a href="tel:+919699911101" title="Call Us" class="w-14 h-14 bg-primary hover:bg-primary-dark text-white rounded-full flex items-center justify-center shadow-xl transition-all hover:scale-110">
        <i class="fas fa-phone text-lg"></i>
    </a>
    <a href="https://wa.me/919699911101?text=Hello%2C%20I%20need%20to%20book%20an%20appointment" target="_blank" title="WhatsApp" class="w-14 h-14 bg-green-500 hover:bg-green-600 text-white rounded-full flex items-center justify-center shadow-xl whatsapp-pulse transition-all hover:scale-110">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>
</div>

{{-- Scroll to Top --}}
<button id="scroll-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" class="fixed bottom-6 left-6 z-50 w-12 h-12 bg-accent hover:bg-accent-dark text-white rounded-full items-center justify-center shadow-xl transition-all hidden">
    <i class="fas fa-arrow-up"></i>
</button>

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 600, once: true, offset: 60 });

    // Sticky header
    const header = document.getElementById('main-header');
    const scrollTopBtn = document.getElementById('scroll-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) {
            header.classList.add('scrolled');
            header.classList.remove('bg-transparent');
            scrollTopBtn.classList.remove('hidden');
            scrollTopBtn.classList.add('flex');
        } else {
            header.classList.remove('scrolled');
            header.classList.add('bg-transparent');
            scrollTopBtn.classList.add('hidden');
            scrollTopBtn.classList.remove('flex');
        }
    });

    // Mobile menu
    document.getElementById('mobile-menu-btn').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Counter animation
    function animateCounter(el) {
        const target = parseInt(el.dataset.target);
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        const timer = setInterval(() => {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = Math.floor(current).toLocaleString();
        }, 16);
    }
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting && !e.target.dataset.animated) {
                e.target.dataset.animated = true;
                animateCounter(e.target);
            }
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('.counter-num').forEach(el => counterObserver.observe(el));
</script>

@yield('scripts')
</body>
</html>
