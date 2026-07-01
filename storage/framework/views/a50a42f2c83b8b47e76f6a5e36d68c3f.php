<?php $__env->startSection('title', $department->name . ' – Bilal Hospital Mumbra'); ?>
<?php $__env->startSection('meta_description', $department->short_description); ?>

<?php $__env->startSection('content'); ?>


<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Specialised Care</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;"><?php echo e($department->name); ?></h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <?php if($department->short_description): ?>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;max-width:600px;margin:0 auto;"><?php echo e($department->short_description); ?></p>
        <?php endif; ?>
    </div>
</div>


<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="<?php echo e(route('home')); ?>" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <a href="<?php echo e(route('departments')); ?>" style="color:#1B3A7A;">Departments</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span><?php echo e($department->name); ?></span>
        </p>
    </div>
</div>

<section class="py-24" style="background:#F7F9FC;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-3 gap-10">

            
            <div class="lg:col-span-2" data-aos="fade-right">

                
                <div style="background:#fff;border-radius:12px;padding:36px;box-shadow:0 2px 20px rgba(27,58,122,0.07);margin-bottom:24px;">
                    <p class="section-tag">About This Department</p>
                    <h2 class="section-title" style="font-size:1.8rem;"><?php echo e($department->name); ?></h2>
                    <div class="section-divider"></div>
                    <?php if($department->description): ?>
                    <div style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.9;">
                        <?php echo nl2br(e($department->description)); ?>

                    </div>
                    <?php elseif($department->short_description): ?>
                    <p style="font-family:Ubuntu;color:#6b6b6b;font-size:15px;line-height:1.9;"><?php echo e($department->short_description); ?></p>
                    <?php endif; ?>
                </div>

                
                <?php if($doctors->count()): ?>
                <div style="background:#fff;border-radius:12px;padding:36px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:20px;margin-bottom:24px;">Our <?php echo e($department->name); ?> Specialists</h3>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('doctors.show', $doctor->slug)); ?>"
                           style="display:flex;gap:14px;align-items:center;padding:16px;background:#F7F9FC;border-radius:8px;text-decoration:none;transition:all 0.2s;border:2px solid transparent;"
                           onmouseover="this.style.borderColor='#F5821F';this.style.background='#fff';"
                           onmouseout="this.style.borderColor='transparent';this.style.background='#F7F9FC';">
                            <div style="width:52px;height:52px;background:rgba(27,58,122,0.08);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <?php if($doctor->photo): ?>
                                <img src="<?php echo e(asset('storage/'.$doctor->photo)); ?>" alt="<?php echo e($doctor->name); ?>" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                                <?php else: ?>
                                <i class="fas fa-user-md" style="color:#1B3A7A;font-size:20px;"></i>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h4 style="font-family:Montserrat;font-weight:700;font-size:13px;color:#1B3A7A;margin-bottom:3px;"><?php echo e($doctor->name); ?></h4>
                                <p style="font-family:Ubuntu;font-size:12px;color:#F5821F;margin-bottom:2px;"><?php echo e($doctor->designation); ?></p>
                                <p style="font-family:Ubuntu;font-size:11px;color:#9ca3af;"><?php echo e(Str::limit($doctor->qualifications, 40)); ?></p>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            
            <div data-aos="fade-left" class="space-y-6">

                
                <div style="background:linear-gradient(135deg,#1B3A7A,#122550);border-radius:12px;padding:28px;">
                    <i class="fas fa-calendar-check" style="color:#F5821F;font-size:32px;margin-bottom:14px;display:block;"></i>
                    <h3 style="font-family:Montserrat;font-weight:800;color:#fff;font-size:17px;margin-bottom:8px;">Book a Consultation</h3>
                    <p style="font-family:Ubuntu;color:rgba(255,255,255,0.7);font-size:13px;margin-bottom:20px;">Schedule a consultation with our <?php echo e($department->name); ?> specialist.</p>
                    <a href="<?php echo e(route('appointment')); ?>?dept=<?php echo e($department->id); ?>" class="btn-primary" style="width:100%;justify-content:center;">Book Now</a>
                    <a href="tel:+919699911101" style="display:block;margin-top:10px;text-align:center;color:rgba(255,255,255,0.65);font-family:Ubuntu;font-size:13px;text-decoration:none;">
                        <i class="fas fa-phone mr-2"></i>9699 911101
                    </a>
                </div>

                
                <div style="background:#FEF2F2;border:2px solid #FECACA;border-radius:12px;padding:24px;text-align:center;">
                    <i class="fas fa-ambulance" style="color:#DC2626;font-size:28px;margin-bottom:10px;display:block;"></i>
                    <h4 style="font-family:Montserrat;font-weight:700;color:#DC2626;font-size:15px;margin-bottom:6px;">Emergency Line</h4>
                    <a href="tel:+919699911101" style="font-family:Montserrat;font-weight:900;color:#DC2626;font-size:20px;text-decoration:none;display:block;">9699 911101</a>
                    <p style="font-family:Ubuntu;font-size:12px;color:#ef4444;margin-top:6px;">24×7 Available</p>
                </div>

                
                <div style="background:#fff;border-radius:12px;padding:24px;box-shadow:0 2px 20px rgba(27,58,122,0.07);">
                    <h3 style="font-family:Montserrat;font-weight:800;color:#1B3A7A;font-size:15px;margin-bottom:16px;">Explore All Departments</h3>
                    <a href="<?php echo e(route('departments')); ?>" class="btn-navy" style="width:100%;justify-content:center;">
                        <i class="fas fa-th"></i> View All 24 Departments
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\htdocs\projects\bilal\New folder\New folder\bilal-hospital\bilal-hospital-website\resources\views/departments/show.blade.php ENDPATH**/ ?>