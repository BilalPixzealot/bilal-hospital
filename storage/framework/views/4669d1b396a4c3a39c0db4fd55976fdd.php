<?php $__env->startSection('title','About Bilal Hospital – Multispecialty Hospital Mumbra'); ?>
<?php $__env->startSection('meta_description','Learn about Bilal Hospital – a 50-bedded multispecialty hospital in Mumbra, Thane. ISO 9001:2015 Certified & NABH Pre-Accredited with 17+ years of healthcare excellence.'); ?>

<?php $__env->startSection('content'); ?>


<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Who We Are</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">About Bilal Hospital</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">Touching Lives With Caring Hands — Mumbra, Thane, Maharashtra</p>
    </div>
</div>


<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="<?php echo e(route('home')); ?>" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>About Us</span>
        </p>
    </div>
</div>


<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=800&q=80" alt="Bilal Hospital" loading="lazy" width="800" height="560"
                     style="width:100%;height:460px;object-fit:cover;border-radius:12px;">
            </div>
            <div data-aos="fade-left">
                <p class="section-tag">Our Story</p>
                <h2 class="section-title" style="font-size:clamp(1.8rem,3.5vw,2.8rem);">17+ Years of Trusted<br>Healthcare Excellence</h2>
                <div class="section-divider"></div>
                <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.8;margin-bottom:16px;">
                    Bilal Hospital is a <strong style="color:#1B3A7A;">50-bedded Multispecialty hospital</strong> established with a vision to bring world-class healthcare to Mumbra and surrounding areas of Thane district.
                </p>
                <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.8;margin-bottom:16px;">
                    Equipped with a well-furnished ICU & NICU, spacious patient wards, deluxe and super deluxe rooms, state-of-the-art Operation Theatres, and a comprehensive Diagnostic Centre — Bilal Hospital provides end-to-end healthcare.
                </p>
                <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.8;margin-bottom:28px;">
                    Empanelled with 17+ insurance companies and 30+ TPAs for cashless treatment, ensuring quality healthcare is accessible and affordable.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span style="display:inline-flex;align-items:center;gap:8px;background:#EEF2FF;color:#1B3A7A;border-radius:6px;padding:10px 18px;font-family:Montserrat;font-size:12px;font-weight:700;">
                        <i class="fas fa-certificate" style="color:#F5821F;"></i> ISO 9001:2015 Certified
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:8px;background:#FFF7ED;color:#92400E;border-radius:6px;padding:10px 18px;font-family:Montserrat;font-size:12px;font-weight:700;">
                        <i class="fas fa-award" style="color:#F5821F;"></i> NABH Pre-Accredited
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Our Foundation</p>
            <h2 class="section-title" style="font-size:clamp(1.8rem,3.5vw,2.8rem);">Mission, Vision & Values</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            $mvv = [
                ['icon'=>'fa-bullseye','title'=>'Our Mission','color'=>'#F5821F',
                 'text'=>'To provide compassionate, affordable, and high-quality healthcare to every patient using advanced medical technology and evidence-based practices.'],
                ['icon'=>'fa-eye','title'=>'Our Vision','color'=>'#1B3A7A',
                 'text'=>'To be the most trusted and preferred multispecialty hospital in Mumbra and Thane, recognized for clinical excellence and patient-centered care.'],
                ['icon'=>'fa-heart','title'=>'Our Values','color'=>'#F5821F',
                 'text'=>'Compassion • Integrity • Excellence • Innovation • Teamwork. These core values guide every interaction with our patients, families, and each other.'],
            ];
            ?>
            <?php $__currentLoopData = $mvv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background:#fff;border-radius:12px;padding:36px 28px;box-shadow:0 2px 20px rgba(27,58,122,0.07);border-top:4px solid <?php echo e($item['color']); ?>;" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <div style="width:52px;height:52px;background:rgba(245,130,31,0.1);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
                    <i class="fas <?php echo e($item['icon']); ?>" style="color:<?php echo e($item['color']); ?>;font-size:22px;"></i>
                </div>
                <h3 style="font-family:Montserrat;font-weight:800;font-size:18px;color:#1B3A7A;margin-bottom:14px;"><?php echo e($item['title']); ?></h3>
                <p style="font-family:Ubuntu;color:#6b6b6b;font-size:14px;line-height:1.8;"><?php echo e($item['text']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Infrastructure</p>
            <h2 class="section-title" style="font-size:clamp(1.8rem,3.5vw,2.8rem);">World-Class Facilities</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
            <?php
            $infra = [
                ['icon'=>'fa-bed','title'=>'50 Beds'],
                ['icon'=>'fa-heartbeat','title'=>'Equipped ICU'],
                ['icon'=>'fa-baby','title'=>'NICU'],
                ['icon'=>'fa-cut','title'=>'Operation Theatres'],
                ['icon'=>'fa-microscope','title'=>'Diagnostic Centre'],
                ['icon'=>'fa-ambulance','title'=>'24×7 Emergency'],
                ['icon'=>'fa-pills','title'=>'In-house Pharmacy'],
                ['icon'=>'fa-wheelchair','title'=>'Patient Wards'],
            ];
            ?>
            <?php $__currentLoopData = $infra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background:#F7F9FC;border-radius:10px;padding:28px 20px;text-align:center;transition:all 0.3s;" class="hover:shadow-md hover:-translate-y-1" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 50); ?>">
                <div style="width:52px;height:52px;background:rgba(27,58,122,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
                    <i class="fas <?php echo e($item['icon']); ?>" style="color:#1B3A7A;font-size:22px;"></i>
                </div>
                <p style="font-family:Montserrat;font-weight:700;font-size:13px;color:#1B3A7A;"><?php echo e($item['title']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:80px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background:rgba(255,255,255,0.07);backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,0.15);border-radius:12px;padding:32px 16px;text-align:center;" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <div style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,4vw,3rem);color:#fff;line-height:1;margin-bottom:8px;">
                    <span class="counter-num" data-target="<?php echo e($stat->value); ?>">0</span><span style="color:#F5821F;"><?php echo e($stat->suffix); ?></span>
                </div>
                <div style="font-family:Ubuntu;font-size:13px;color:rgba(255,255,255,0.6);text-transform:uppercase;letter-spacing:1px;"><?php echo e($stat->label); ?></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section style="background:#F5821F;padding:80px 0;">
    <div class="max-w-7xl mx-auto px-5 text-center" data-aos="fade-up">
        <h2 style="font-family:Montserrat;font-weight:900;font-size:clamp(1.8rem,4vw,2.8rem);color:#fff;margin-bottom:12px;">Ready to Experience Excellence?</h2>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.85);font-size:15px;margin-bottom:32px;">Book an appointment or call us — we're here 24×7.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="<?php echo e(route('appointment')); ?>" class="btn-outline"><i class="fas fa-calendar-check"></i> Book Appointment</a>
            <a href="tel:+919699911101" style="display:inline-flex;align-items:center;gap:8px;background:#fff;color:#F5821F;font-family:Montserrat;font-weight:700;font-size:13px;letter-spacing:1px;text-transform:uppercase;padding:14px 32px;border-radius:4px;text-decoration:none;">
                <i class="fas fa-phone"></i> 9699 911101
            </a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\htdocs\projects\bilal\New folder\New folder\bilal-hospital\bilal-hospital-website\resources\views/pages/about.blade.php ENDPATH**/ ?>