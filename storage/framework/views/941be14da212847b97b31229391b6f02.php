<?php $__env->startSection('title', 'Bilal Hospital – Multispecialty Hospital in Mumbra, Thane'); ?>
<?php $__env->startSection('meta_description', 'Bilal Hospital is a 50-bedded multispecialty hospital in Mumbra, Thane with well-equipped ICU, NICU, OT and diagnostic centre. ISO 9001:2015 Certified | NABH Pre-Accredited.'); ?>

<?php $__env->startSection('head'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Hospital",
  "name": "Bilal Hospital",
  "description": "50-bedded multispecialty hospital with ICU, NICU, OT and diagnostic centre",
  "url": "<?php echo e(url('/')); ?>",
  "telephone": "+919699911101",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1st Floor, A Wing, Royal Garden, Old Mumbai-Pune Road, Near Shimla Park",
    "addressLocality": "Mumbra",
    "addressRegion": "Maharashtra",
    "postalCode": "400612",
    "addressCountry": "IN"
  },
  "openingHours": "Mo-Su 00:00-24:00"
}
</script>
<style>
    /* Full-screen hero */
    .hero-section { height: 100vh; min-height: 600px; }
    .hero-slide { position: absolute; inset: 0; display: none; }
    .hero-slide.active { display: flex; align-items: center; }
    .hero-bg { width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0; }
    .hero-overlay-dark {
        position: absolute; inset: 0;
        background: linear-gradient(135deg, rgba(27,58,122,0.88) 0%, rgba(18,37,80,0.78) 60%, rgba(27,58,122,0.5) 100%);
    }

    /* Slide dot */
    .slide-dot { width: 10px; height: 10px; border-radius: 9999px; background: rgba(255,255,255,0.4); transition: all 0.3s; cursor: pointer; }
    .slide-dot.active { width: 32px; background: #F5821F; }

    /* Slide in animation */
    .hero-slide.active .hero-content { animation: slideUp 0.7s cubic-bezier(0.4,0,0.2,1) both; }
    @keyframes slideUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

    /* Info bar icon box */
    .info-icon { width: 44px; height: 44px; background: rgba(245,130,31,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }

    /* Feature card */
    .feature-card { background: #fff; border-radius: 12px; padding: 32px 24px; box-shadow: 0 2px 20px rgba(27,58,122,0.07); transition: all 0.3s; border-top: 4px solid transparent; }
    .feature-card:hover { border-top-color: #F5821F; transform: translateY(-5px); box-shadow: 0 16px 48px rgba(27,58,122,0.14); }

    /* Stat card */
    .stat-card { background: rgba(255,255,255,0.07); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 32px 16px; text-align: center; }

    /* Doctor card */
    .doc-card { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 20px rgba(27,58,122,0.07); transition: all 0.3s; }
    .doc-card:hover { transform: translateY(-5px); box-shadow: 0 16px 48px rgba(27,58,122,0.14); }
    .doc-card .doc-img { height: 180px; background: #EEF2FF; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; }
    .doc-card .doc-img img { width: 100%; height: 100%; object-fit: cover; }
    .doc-card .doc-tag { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(27,58,122,0.9), transparent); padding: 12px 14px 10px; }

    /* Gallery hover */
    .gallery-item { overflow: hidden; border-radius: 10px; }
    .gallery-item img { transition: transform 0.5s ease; }
    .gallery-item:hover img { transform: scale(1.07); }

    /* Testimonial card */
    .testi-card { background: #fff; border-radius: 12px; padding: 28px 24px; box-shadow: 0 2px 20px rgba(27,58,122,0.06); position: relative; }
    .testi-card::before { content: '\201C'; font-size: 80px; line-height: 1; position: absolute; top: 10px; left: 20px; color: #F5821F; opacity: 0.15; font-family: Georgia, serif; }

    /* Dept grid */
    .dept-grid-card { background: #fff; border-radius: 12px; padding: 28px 20px; box-shadow: 0 2px 20px rgba(27,58,122,0.06); transition: all 0.3s; text-decoration: none; display: block; }
    .dept-grid-card:hover { box-shadow: 0 14px 44px rgba(27,58,122,0.14); transform: translateY(-4px); }
    .dept-icon-box { width: 52px; height: 52px; background: rgba(27,58,122,0.08); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; transition: all 0.3s; }
    .dept-grid-card:hover .dept-icon-box { background: #1B3A7A; }
    .dept-grid-card:hover .dept-icon-box i { color: #fff !important; }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<section class="hero-section relative overflow-hidden">
    <?php
    $slides = [
        [
            'tag'     => 'Trusted Healthcare Since 2007',
            'heading' => "Your Health,\nOur Priority.",
            'sub'     => '50-Bedded Multispecialty Hospital with Advanced ICU, NICU, OT & Diagnostics',
            'bg'      => 'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=1600&q=80',
        ],
        [
            'tag'     => 'Expert Multi-Specialty Team',
            'heading' => "Expert Care,\nCompassionate Doctors.",
            'sub'     => 'ISO 9001:2015 Certified | NABH Pre-Accredited | 24×7 Emergency Services',
            'bg'      => 'https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=1600&q=80',
        ],
        [
            'tag'     => 'Emergency & Critical Care',
            'heading' => "Saving Lives\n24×7.",
            'sub'     => 'Round-the-clock Emergency, ICU, Maternity & Trauma Care in Mumbra',
            'bg'      => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1600&q=80',
        ],
    ];
    ?>

    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="hero-slide <?php echo e($i === 0 ? 'active' : ''); ?>">
        <img src="<?php echo e($slide['bg']); ?>" alt="Bilal Hospital" class="hero-bg" <?php echo e($i === 0 ? 'fetchpriority="high"' : 'loading="lazy"'); ?> width="1600" height="900">
        <div class="hero-overlay-dark"></div>
        <div class="hero-content relative z-10 w-full max-w-7xl mx-auto px-6 pt-24">
            <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:16px;"><?php echo e($slide['tag']); ?></p>
            <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2.6rem,6vw,5rem);color:#fff;line-height:1.1;margin-bottom:20px;white-space:pre-line;"><?php echo e($slide['heading']); ?></h1>
            <div style="width:60px;height:4px;background:#F5821F;border-radius:2px;margin-bottom:24px;"></div>
            <p style="font-family:Ubuntu,sans-serif;font-size:16px;color:rgba(255,255,255,0.82);max-width:600px;margin-bottom:36px;line-height:1.7;"><?php echo e($slide['sub']); ?></p>
            <div class="flex flex-wrap gap-4">
                <a href="<?php echo e(route('appointment')); ?>" class="btn-primary">
                    <i class="fas fa-calendar-check"></i> Book Appointment
                </a>
                <a href="tel:+919699911101" class="btn-outline">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-2 z-20">
        <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $_): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button class="slide-dot <?php echo e($i === 0 ? 'active' : ''); ?>" data-index="<?php echo e($i); ?>"></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
    <div class="absolute bottom-8 right-10 z-20 hidden lg:flex flex-col items-center gap-2">
        <span style="font-family:Montserrat;font-size:10px;letter-spacing:3px;color:rgba(255,255,255,0.5);text-transform:uppercase;writing-mode:vertical-rl;">Scroll</span>
        <div style="width:1px;height:40px;background:rgba(255,255,255,0.3);"></div>
    </div>
</section>


<section style="background:#1B3A7A;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-white/10">
            <?php
            $infos = [
                ['icon'=>'fa-map-marker-alt','label'=>'Location','val'=>'Mumbra, Thane - 400612'],
                ['icon'=>'fa-phone','label'=>'Emergency','val'=>'9699 911101','href'=>'tel:+919699911101'],
                ['icon'=>'fa-clock','label'=>'Hours','val'=>'Open 24 × 7 × 365'],
                ['icon'=>'fa-ambulance','label'=>'Ambulance','val'=>'Call 9699 911101','href'=>'tel:+919699911101'],
            ];
            ?>
            <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-center gap-4 py-5 px-6">
                <div class="info-icon"><i class="fas <?php echo e($info['icon']); ?> text-accent text-lg"></i></div>
                <div>
                    <p style="font-family:Montserrat;font-size:10px;font-weight:700;letter-spacing:2px;color:rgba(255,255,255,0.5);text-transform:uppercase;"><?php echo e($info['label']); ?></p>
                    <?php if(isset($info['href'])): ?>
                    <a href="<?php echo e($info['href']); ?>" style="font-family:Ubuntu;font-size:14px;color:#fff;font-weight:500;"><?php echo e($info['val']); ?></a>
                    <?php else: ?>
                    <p style="font-family:Ubuntu;font-size:14px;color:#fff;font-weight:500;"><?php echo e($info['val']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            
            <div class="relative" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=800&q=80"
                     alt="Bilal Hospital" loading="lazy" width="800" height="600"
                     style="width:100%;height:480px;object-fit:cover;border-radius:12px;">
                
                <div style="position:absolute;bottom:-24px;right:-24px;background:#F5821F;color:#fff;border-radius:12px;padding:20px 28px;box-shadow:0 12px 40px rgba(245,130,31,0.35);">
                    <div style="font-family:Montserrat;font-weight:900;font-size:36px;line-height:1;">17+</div>
                    <div style="font-family:Ubuntu;font-size:13px;font-weight:500;margin-top:4px;">Years of Trust</div>
                </div>
            </div>

            
            <div data-aos="fade-left">
                <p class="section-tag">About Bilal Hospital</p>
                <h2 class="section-title text-4xl mb-0">Touching Lives With<br><span style="color:#F5821F;">Caring Hands</span></h2>
                <div class="section-divider"></div>
                <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.8;margin-bottom:16px;">
                    Bilal Hospital is a <strong style="color:#1B3A7A;">50-bedded Multispecialty hospital</strong> with well-equipped ICU & NICU, spacious patient wards, and furnished rooms. Situated at the heart of Mumbra, this state-of-art hospital has modern facilities & advanced equipment.
                </p>
                <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.8;margin-bottom:28px;">
                    Our motto — <em style="color:#1B3A7A;font-style:normal;font-weight:600;">"Improving quality of your life by delivering excellence in healthcare"</em> — drives every service we provide.
                </p>

                
                <div class="flex flex-wrap gap-3 mb-8">
                    <span style="display:inline-flex;align-items:center;gap:8px;background:#EEF2FF;color:#1B3A7A;border-radius:6px;padding:8px 16px;font-family:Montserrat;font-size:12px;font-weight:700;">
                        <i class="fas fa-certificate text-accent"></i> ISO 9001:2015 Certified
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:8px;background:#FFF7ED;color:#92400E;border-radius:6px;padding:8px 16px;font-family:Montserrat;font-size:12px;font-weight:700;">
                        <i class="fas fa-award" style="color:#F5821F;"></i> NABH Pre-Accredited
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:8px;background:#EEF2FF;color:#1B3A7A;border-radius:6px;padding:8px 16px;font-family:Montserrat;font-size:12px;font-weight:700;">
                        <i class="fas fa-hospital text-accent"></i> 24+ Specialities
                    </span>
                </div>

                <a href="<?php echo e(route('about')); ?>" class="btn-navy">
                    More About Us <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<section style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:80px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <div style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,4vw,3rem);color:#fff;line-height:1;margin-bottom:8px;">
                    <span class="counter-num" data-target="<?php echo e($stat->value); ?>">0</span><span style="color:#F5821F;"><?php echo e($stat->suffix); ?></span>
                </div>
                <div style="font-family:Ubuntu;font-size:13px;color:rgba(255,255,255,0.6);text-transform:uppercase;letter-spacing:1px;"><?php echo e($stat->label); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">What We Offer</p>
            <h2 class="section-title text-4xl">Our Departments</h2>
            <div class="section-divider center"></div>
            <p style="font-family:Ubuntu;color:#6b6b6b;max-width:560px;margin:0 auto;">Comprehensive multi-specialty care under one roof, delivered by expert consultants.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('departments.show', $dept->slug)); ?>" class="dept-grid-card" data-aos="fade-up" data-aos-delay="<?php echo e(($loop->index % 4) * 80); ?>">
                <div class="dept-icon-box">
                    <i class="fas fa-stethoscope text-primary text-xl"></i>
                </div>
                <h3 style="font-family:Montserrat;font-weight:700;color:#1B3A7A;font-size:14px;margin-bottom:8px;"><?php echo e($dept->name); ?></h3>
                <?php if($dept->short_description): ?>
                <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;line-height:1.6;margin-bottom:12px;" class="line-clamp-2"><?php echo e($dept->short_description); ?></p>
                <?php endif; ?>
                <span style="font-family:Montserrat;font-size:12px;font-weight:700;color:#F5821F;letter-spacing:0.5px;display:flex;align-items:center;gap:6px;">
                    Learn More <i class="fas fa-arrow-right text-xs"></i>
                </span>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="<?php echo e(route('departments')); ?>" class="btn-navy">
                View All Departments <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Our Team</p>
            <h2 class="section-title text-4xl">Expert Consultants</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('doctors.show', $doctor->slug)); ?>" class="doc-card" data-aos="fade-up" data-aos-delay="<?php echo e(($loop->index % 4) * 80); ?>">
                <div class="doc-img">
                    <?php if($doctor->photo): ?>
                    <img src="<?php echo e(asset('storage/' . $doctor->photo)); ?>" alt="<?php echo e($doctor->name); ?>" loading="lazy" width="220" height="180">
                    <?php else: ?>
                    <i class="fas fa-user-md text-5xl" style="color:#1B3A7A;opacity:0.3;"></i>
                    <?php endif; ?>
                    <div class="doc-tag">
                        <p style="font-family:Montserrat;font-size:11px;font-weight:700;color:rgba(255,255,255,0.7);letter-spacing:0.5px;"><?php echo e($doctor->designation); ?></p>
                    </div>
                </div>
                <div style="padding:16px;">
                    <h3 style="font-family:Montserrat;font-weight:700;font-size:14px;color:#1B3A7A;margin-bottom:4px;"><?php echo e($doctor->name); ?></h3>
                    <p style="font-family:Ubuntu;font-size:12px;color:#F5821F;font-weight:500;"><?php echo e(Str::limit($doctor->qualifications, 50)); ?></p>
                    <?php if($doctor->department): ?>
                    <p style="font-family:Ubuntu;font-size:12px;color:#6b6b6b;margin-top:4px;"><?php echo e($doctor->department->name); ?></p>
                    <?php endif; ?>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="<?php echo e(route('doctors')); ?>" class="btn-primary">
                Meet All Doctors <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


<section style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:96px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Why Choose Us</p>
                <h2 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,4vw,3rem);color:#fff;line-height:1.15;margin-bottom:16px;">The Right Choice for<br>Your Family's Health</h2>
                <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin-bottom:24px;"></div>
                <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;line-height:1.8;margin-bottom:32px;">
                    At Bilal Hospital, we combine modern medical technology with compassionate care to deliver the best outcomes for our patients. Serving Mumbra and the surrounding region since 2007.
                </p>
                <a href="<?php echo e(route('about')); ?>" class="btn-primary">
                    Our Story <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5" data-aos="fade-left">
                <?php
                $reasons = [
                    ['icon'=>'fa-ambulance','title'=>'24×7 Emergency','desc'=>'Round-the-clock trauma & emergency services.'],
                    ['icon'=>'fa-award','title'=>'NABH Pre-Accredited','desc'=>'Quality standards ensuring patient safety.'],
                    ['icon'=>'fa-certificate','title'=>'ISO 9001:2015','desc'=>'Internationally recognized quality systems.'],
                    ['icon'=>'fa-shield-alt','title'=>'Cashless Insurance','desc'=>'Empanelled with 30+ companies & TPAs.'],
                    ['icon'=>'fa-user-md','title'=>'Expert Specialists','desc'=>'24 speciality departments under one roof.'],
                    ['icon'=>'fa-microscope','title'=>'Advanced Diagnostics','desc'=>'CT, MRI, Sonography, Pathology & more.'],
                ];
                ?>
                <?php $__currentLoopData = $reasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:10px;padding:20px;" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 60); ?>">
                    <div style="width:42px;height:42px;background:rgba(245,130,31,0.15);border-radius:8px;display:flex;align-items:center;justify-content:center;margin-bottom:12px;">
                        <i class="fas <?php echo e($r['icon']); ?>" style="color:#F5821F;font-size:18px;"></i>
                    </div>
                    <h4 style="font-family:Montserrat;font-weight:700;font-size:13px;color:#fff;margin-bottom:6px;"><?php echo e($r['title']); ?></h4>
                    <p style="font-family:Ubuntu;font-size:12px;color:rgba(255,255,255,0.55);line-height:1.6;"><?php echo e($r['desc']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>


<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Diagnostics</p>
            <h2 class="section-title text-4xl">Bilal Diagnostic Centre</h2>
            <div class="section-divider center"></div>
            <p style="font-family:Ubuntu;color:#6b6b6b;max-width:520px;margin:0 auto;">Advanced diagnostic services for accurate and timely diagnosis.</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-4">
            <?php
            $services = [
                ['icon'=>'fa-wave-square','name'=>'Sonography'],
                ['icon'=>'fa-x-ray','name'=>'Digital X-Ray'],
                ['icon'=>'fa-vials','name'=>'Pathology'],
                ['icon'=>'fa-heartbeat','name'=>'2D Echo'],
                ['icon'=>'fa-heart','name'=>'Doppler'],
                ['icon'=>'fa-baby','name'=>'NST'],
                ['icon'=>'fa-brain','name'=>'CT Scan'],
                ['icon'=>'fa-magnet','name'=>'MRI'],
            ];
            ?>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $svc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white rounded-xl p-5 text-center shadow-sm hover:shadow-md transition-all" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 40); ?>">
                <div style="width:48px;height:48px;background:rgba(27,58,122,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
                    <i class="fas <?php echo e($svc['icon']); ?>" style="color:#1B3A7A;font-size:20px;"></i>
                </div>
                <p style="font-family:Montserrat;font-weight:700;font-size:12px;color:#1B3A7A;"><?php echo e($svc['name']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<?php if($testimonials->count()): ?>
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Patient Reviews</p>
            <h2 class="section-title text-4xl">What Our Patients Say</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="testi-card" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <div class="flex gap-1 mb-4">
                    <?php for($i = 0; $i < $t->rating; $i++): ?><i class="fas fa-star" style="color:#F5821F;font-size:13px;"></i><?php endfor; ?>
                </div>
                <p style="font-family:Ubuntu;font-size:15px;color:#4b5563;line-height:1.8;margin-bottom:20px;position:relative;z-index:1;">"<?php echo e($t->review); ?>"</p>
                <div class="flex items-center gap-3">
                    <div style="width:42px;height:42px;background:#1B3A7A;border-radius:50%;display:flex;align-items:center;justify-content:center;">
                        <span style="font-family:Montserrat;font-weight:700;color:#fff;font-size:15px;"><?php echo e(substr($t->patient_name,0,1)); ?></span>
                    </div>
                    <div>
                        <p style="font-family:Montserrat;font-weight:700;font-size:13px;color:#1B3A7A;"><?php echo e($t->patient_name); ?></p>
                        <p style="font-family:Ubuntu;font-size:12px;color:#6b6b6b;"><?php echo e($t->source); ?> Review</p>
                    </div>
                    <?php if($t->source === 'Google'): ?>
                    <i class="fab fa-google ml-auto" style="color:#EA4335;font-size:20px;"></i>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if($gallery->count()): ?>
<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Our Facilities</p>
            <h2 class="section-title text-4xl">Hospital Gallery</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <?php $__currentLoopData = $gallery->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 60); ?>">
                <img src="<?php echo e(asset('storage/' . $img->image)); ?>" alt="<?php echo e($img->title ?? 'Hospital'); ?>" loading="lazy" width="480" height="300"
                     style="width:100%;height:220px;object-fit:cover;display:block;">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="text-center mt-10" data-aos="fade-up">
            <a href="<?php echo e(route('gallery')); ?>" class="btn-navy">View Full Gallery <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<?php endif; ?>


<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);border-radius:16px;padding:56px 48px;display:flex;flex-wrap:wrap;align-items:center;gap:32px;justify-content:space-between;" data-aos="fade-up">
            <div>
                <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:10px;">Cashless Treatment</p>
                <h2 style="font-family:Montserrat;font-weight:900;font-size:clamp(1.6rem,3vw,2.4rem);color:#fff;margin-bottom:10px;">Cashless Facility Available</h2>
                <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:14px;">Empanelled with 17 Insurance Companies & 30 TPAs for hassle-free treatment.</p>
            </div>
            <a href="<?php echo e(route('cashless')); ?>" class="btn-primary">
                View Insurance Partners <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


<section style="background:#F5821F;padding:80px 0;">
    <div class="max-w-7xl mx-auto px-5 text-center" data-aos="fade-up">
        <h2 style="font-family:Montserrat;font-weight:900;font-size:clamp(1.8rem,4vw,3rem);color:#fff;margin-bottom:12px;">Book Your Appointment Today</h2>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.85);font-size:16px;margin-bottom:36px;">Expert consultations available 24×7. Call us anytime for emergency care.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="<?php echo e(route('appointment')); ?>" class="btn-outline">
                <i class="fas fa-calendar-check"></i> Book Online
            </a>
            <a href="tel:+919699911101" style="display:inline-flex;align-items:center;gap:8px;background:#fff;color:#F5821F;font-family:Montserrat;font-weight:700;font-size:13px;letter-spacing:1px;text-transform:uppercase;padding:14px 32px;border-radius:4px;border:2px solid #fff;transition:all 0.3s;text-decoration:none;">
                <i class="fas fa-phone"></i> 9699 911101
            </a>
        </div>
    </div>
</section>


<?php if($posts->count()): ?>
<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Health Tips</p>
            <h2 class="section-title text-4xl">Latest Health Articles</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md hover:-translate-y-1 transition-all" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <?php if($post->featured_image): ?>
                <img src="<?php echo e(asset('storage/'.$post->featured_image)); ?>" alt="<?php echo e($post->title); ?>" loading="lazy" width="480" height="220" style="width:100%;height:200px;object-fit:cover;display:block;">
                <?php else: ?>
                <div style="width:100%;height:200px;background:#EEF2FF;display:flex;align-items:center;justify-content:center;">
                    <i class="fas fa-newspaper fa-3x" style="color:#1B3A7A;opacity:0.2;"></i>
                </div>
                <?php endif; ?>
                <div style="padding:24px;">
                    <?php if($post->category): ?>
                    <span style="background:#FFF7ED;color:#F5821F;font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:1px;padding:4px 12px;border-radius:4px;text-transform:uppercase;"><?php echo e($post->category); ?></span>
                    <?php endif; ?>
                    <h3 style="font-family:Montserrat;font-weight:700;font-size:16px;color:#1B3A7A;margin:12px 0 8px;line-height:1.4;"><?php echo e($post->title); ?></h3>
                    <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;line-height:1.7;margin-bottom:16px;" class="line-clamp-3"><?php echo e($post->excerpt); ?></p>
                    <a href="<?php echo e(route('blog.show', $post->slug)); ?>" style="font-family:Montserrat;font-weight:700;font-size:12px;color:#F5821F;letter-spacing:0.5px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;">
                        Read More <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="text-center mt-10" data-aos="fade-up">
            <a href="<?php echo e(route('blog')); ?>" class="btn-navy">View All Articles <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<?php endif; ?>


<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Find Us</p>
            <h2 class="section-title text-4xl">Location & Contact</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid lg:grid-cols-5 gap-10 items-start">
            <div class="lg:col-span-3" data-aos="fade-right">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.0!2d73.0150!3d19.1800!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf5b8f5e5555%3A0x0!2sBilal+Hospital%2C+Mumbra!5e0!3m2!1sen!2sin!4v1600000000000"
                    style="width:100%;height:380px;border:0;border-radius:12px;display:block;"
                    allowfullscreen loading="lazy">
                </iframe>
            </div>
            <div class="lg:col-span-2 space-y-6" data-aos="fade-left">
                <?php
                $contacts = [
                    ['icon'=>'fa-map-marker-alt','title'=>'Address','content'=>'1st Floor, A Wing, Royal Garden, Old Mumbai-Pune Road, Near Shimla Park, Mumbra, Thane – 400612'],
                    ['icon'=>'fa-phone','title'=>'OPD / Appointment','content'=>'9699 911101 | 9867 934366<br>022-2535 1500 | 022-2535 4111'],
                    ['icon'=>'fa-hospital','title'=>'ICU & Maternity','content'=>'98194 94485 | 96192 52425'],
                    ['icon'=>'fa-clock','title'=>'Open Hours','content'=>'<span style="color:#F5821F;font-weight:700;">24 × 7 × 365 Days</span>'],
                ];
                ?>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="display:flex;gap:16px;align-items:flex-start;" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 80); ?>">
                    <div style="width:44px;height:44px;background:rgba(27,58,122,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas <?php echo e($c['icon']); ?>" style="color:#1B3A7A;font-size:18px;"></i>
                    </div>
                    <div>
                        <p style="font-family:Montserrat;font-weight:700;font-size:12px;letter-spacing:1px;color:#1B3A7A;text-transform:uppercase;margin-bottom:4px;"><?php echo e($c['title']); ?></p>
                        <p style="font-family:Ubuntu;font-size:14px;color:#6b6b6b;line-height:1.6;"><?php echo $c['content']; ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('contact')); ?>" class="btn-primary mt-4 inline-flex">
                    Send Us a Message <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
// Hero Slider
(function() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots   = document.querySelectorAll('.slide-dot');
    let cur = 0, timer;

    function go(n) {
        slides[cur].classList.remove('active');
        dots[cur].classList.remove('active');
        cur = (n + slides.length) % slides.length;
        slides[cur].classList.add('active');
        dots[cur].classList.add('active');
    }

    dots.forEach((d, i) => d.addEventListener('click', () => { clearInterval(timer); go(i); timer = setInterval(() => go(cur + 1), 5500); }));
    timer = setInterval(() => go(cur + 1), 5500);
})();
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\htdocs\projects\bilal\New folder\New folder\bilal-hospital\bilal-hospital-website\resources\views/pages/home.blade.php ENDPATH**/ ?>