<?php $__env->startSection('title','Departments – Bilal Hospital Mumbra'); ?>
<?php $__env->startSection('meta_description','Explore all 24 departments at Bilal Hospital including ICU, Maternity, Cardiology, Neurology, Orthopedics, and more.'); ?>

<?php $__env->startSection('content'); ?>


<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Specialised Care</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">Our Departments</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">24 Specialities | Comprehensive multispecialty care under one roof</p>
    </div>
</div>


<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="<?php echo e(route('home')); ?>" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>Departments</span>
        </p>
    </div>
</div>


<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('departments.show', $dept->slug)); ?>" class="dept-grid-card" data-aos="fade-up" data-aos-delay="<?php echo e(($loop->index % 4) * 70); ?>">
                <div class="dept-icon-box">
                    <i class="fas fa-stethoscope text-primary text-xl"></i>
                </div>
                <h3 style="font-family:Montserrat;font-weight:700;color:#1B3A7A;font-size:15px;margin-bottom:8px;"><?php echo e($dept->name); ?></h3>
                <?php if($dept->short_description): ?>
                <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;line-height:1.6;margin-bottom:14px;" class="line-clamp-2"><?php echo e($dept->short_description); ?></p>
                <?php endif; ?>
                <span style="font-family:Montserrat;font-size:12px;font-weight:700;color:#F5821F;letter-spacing:0.5px;display:flex;align-items:center;gap:6px;">
                    Learn More <i class="fas fa-arrow-right text-xs"></i>
                </span>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section style="background:#1B3A7A;padding:60px 0;">
    <div class="max-w-7xl mx-auto px-5 flex flex-wrap items-center justify-between gap-6">
        <div>
            <h2 style="font-family:Montserrat;font-weight:800;font-size:1.8rem;color:#fff;margin-bottom:6px;">Need to Book a Consultation?</h2>
            <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:14px;">Our specialists are available 24×7 for appointments and emergencies.</p>
        </div>
        <div class="flex flex-wrap gap-4">
            <a href="<?php echo e(route('appointment')); ?>" class="btn-primary">Book Appointment <i class="fas fa-arrow-right"></i></a>
            <a href="tel:+919699911101" class="btn-outline"><i class="fas fa-phone"></i> 9699 911101</a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\htdocs\projects\bilal\New folder\New folder\bilal-hospital\bilal-hospital-website\resources\views/departments/index.blade.php ENDPATH**/ ?>