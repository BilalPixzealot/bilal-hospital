<?php $__env->startSection('title', 'Cashless Facility – Bilal Hospital Mumbra'); ?>
<?php $__env->startSection('meta_description', 'Bilal Hospital is empanelled with 30+ insurance companies and TPAs for cashless treatment in Mumbra, Thane.'); ?>

<?php $__env->startSection('content'); ?>


<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">No Cash Worries</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">Cashless Facility</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">Empanelled with 17+ insurance companies & 30+ TPAs</p>
    </div>
</div>


<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="<?php echo e(route('home')); ?>" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>Cashless Facility</span>
        </p>
    </div>
</div>


<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80"
                     alt="Cashless Insurance" loading="lazy" width="800" height="520"
                     style="width:100%;height:420px;object-fit:cover;border-radius:12px;">
            </div>
            <div data-aos="fade-left">
                <p class="section-tag">Insurance Empanelment</p>
                <h2 class="section-title" style="font-size:clamp(1.8rem,3.5vw,2.6rem);">Hassle-Free<br>Cashless Treatment</h2>
                <div class="section-divider"></div>
                <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.8;margin-bottom:16px;">
                    Cashless treatment allows insured patients to receive medical care at Bilal Hospital without paying upfront.
                    The hospital directly settles the bills with your insurance company or TPA.
                </p>
                <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.8;margin-bottom:28px;">
                    Focus on your recovery — we handle all the paperwork and billing coordination with your insurer.
                </p>
                <div class="flex flex-wrap gap-3">
                    <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(27,58,122,0.06);color:#1B3A7A;border-radius:6px;padding:12px 20px;font-family:Montserrat;font-size:13px;font-weight:700;">
                        <i class="fas fa-building" style="color:#F5821F;"></i> 17+ Insurance Companies
                    </div>
                    <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(27,58,122,0.06);color:#1B3A7A;border-radius:6px;padding:12px 20px;font-family:Montserrat;font-size:13px;font-weight:700;">
                        <i class="fas fa-handshake" style="color:#F5821F;"></i> 30+ TPA Partners
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="section-tag">Step by Step</p>
            <h2 class="section-title" style="font-size:clamp(1.8rem,3.5vw,2.6rem);">How to Avail Cashless Facility</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <?php
            $steps = [
                ['icon'=>'fa-id-card','title'=>'Show Insurance Card','desc'=>'Present your insurance card or policy document at the admission desk'],
                ['icon'=>'fa-file-alt','title'=>'Fill Pre-Auth Form','desc'=>'Fill out the pre-authorization form at our TPA assistance desk'],
                ['icon'=>'fa-check-circle','title'=>'TPA Approval','desc'=>'Our team coordinates with your TPA for swift approval'],
                ['icon'=>'fa-heart','title'=>'Receive Treatment','desc'=>'Focus on getting better — billing is handled directly with your insurer'],
            ];
            ?>
            <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="text-align:center;position:relative;" data-aos="fade-up" data-aos-delay="<?php echo e($i * 100); ?>">
                <?php if($i < 3): ?>
                <div style="position:absolute;top:28px;left:calc(50% + 40px);right:calc(-50% + 40px);height:2px;background:#F5821F;opacity:0.3;" class="hidden md:block"></div>
                <?php endif; ?>
                <div style="width:60px;height:60px;background:#1B3A7A;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;position:relative;z-index:1;">
                    <i class="fas <?php echo e($step['icon']); ?>" style="color:#fff;font-size:22px;"></i>
                </div>
                <div style="display:inline-block;background:#F5821F;color:#fff;font-family:Montserrat;font-weight:700;font-size:11px;padding:4px 12px;border-radius:20px;margin-bottom:10px;">STEP <?php echo e($i + 1); ?></div>
                <h4 style="font-family:Montserrat;font-weight:700;color:#1B3A7A;font-size:14px;margin-bottom:8px;"><?php echo e($step['title']); ?></h4>
                <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;line-height:1.7;"><?php echo e($step['desc']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<?php if($insurance->count()): ?>
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-12" data-aos="fade-up">
            <p class="section-tag">Empanelled With</p>
            <h2 class="section-title" style="font-size:clamp(1.8rem,3.5vw,2.6rem);">Insurance Companies</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4" data-aos="fade-up">
            <?php $__currentLoopData = $insurance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background:#F7F9FC;border:2px solid transparent;border-radius:8px;padding:16px 12px;text-align:center;font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;cursor:default;transition:all 0.2s;"
                 onmouseover="this.style.borderColor='#F5821F';this.style.background='#fff';"
                 onmouseout="this.style.borderColor='transparent';this.style.background='#F7F9FC';">
                <i class="fas fa-shield-alt" style="color:#F5821F;font-size:18px;margin-bottom:8px;display:block;"></i>
                <?php echo e($company->name); ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if($tpa->count()): ?>
<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-12" data-aos="fade-up">
            <p class="section-tag">Our TPA Network</p>
            <h2 class="section-title" style="font-size:clamp(1.8rem,3.5vw,2.6rem);">TPA Partners</h2>
            <div class="section-divider center"></div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4" data-aos="fade-up">
            <?php $__currentLoopData = $tpa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background:#fff;border:2px solid transparent;border-radius:8px;padding:16px 12px;text-align:center;font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;cursor:default;transition:all 0.2s;"
                 onmouseover="this.style.borderColor='#1B3A7A';" onmouseout="this.style.borderColor='transparent';">
                <i class="fas fa-handshake" style="color:#1B3A7A;font-size:18px;margin-bottom:8px;display:block;"></i>
                <?php echo e($company->name); ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>


<section style="background:#F5821F;padding:80px 0;">
    <div class="max-w-7xl mx-auto px-5 text-center" data-aos="fade-up">
        <h2 style="font-family:Montserrat;font-weight:900;font-size:clamp(1.8rem,4vw,2.8rem);color:#fff;margin-bottom:12px;">Need Help with Cashless Process?</h2>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.85);font-size:15px;margin-bottom:32px;">Our TPA assistance desk is available to guide you through the process.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="<?php echo e(route('appointment')); ?>" class="btn-outline"><i class="fas fa-calendar-check"></i> Book Appointment</a>
            <a href="tel:+919699911101" style="display:inline-flex;align-items:center;gap:8px;background:#fff;color:#F5821F;font-family:Montserrat;font-weight:700;font-size:13px;letter-spacing:1px;text-transform:uppercase;padding:14px 32px;border-radius:4px;text-decoration:none;">
                <i class="fas fa-phone"></i> 9699 911101
            </a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\htdocs\projects\bilal\New folder\New folder\bilal-hospital\bilal-hospital-website\resources\views/pages/cashless.blade.php ENDPATH**/ ?>