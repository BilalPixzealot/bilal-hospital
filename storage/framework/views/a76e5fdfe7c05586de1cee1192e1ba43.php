<?php $__env->startSection('title', 'Contact Us – Bilal Hospital Mumbra'); ?>
<?php $__env->startSection('meta_description', 'Contact Bilal Hospital, Mumbra. OPD: 9699911101. Address: Royal Garden, Old Mumbai-Pune Road, Mumbra, Thane 400612.'); ?>

<?php $__env->startSection('content'); ?>


<div style="background:linear-gradient(135deg,#1B3A7A 0%,#122550 100%);padding:130px 0 70px;">
    <div class="max-w-7xl mx-auto px-5 text-center">
        <p style="font-family:Montserrat;font-weight:700;font-size:11px;letter-spacing:4px;color:#F5821F;text-transform:uppercase;margin-bottom:12px;">Reach Us</p>
        <h1 style="font-family:Montserrat;font-weight:900;font-size:clamp(2rem,5vw,3.5rem);color:#fff;margin-bottom:16px;">Contact Us</h1>
        <div style="width:50px;height:4px;background:#F5821F;border-radius:2px;margin:0 auto 20px;"></div>
        <p style="font-family:Ubuntu;color:rgba(255,255,255,0.65);font-size:15px;">We're available 24×7 — come visit, call, or drop a message</p>
    </div>
</div>


<div style="background:#F7F9FC;border-bottom:1px solid #e5e7eb;padding:12px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <p style="font-family:Ubuntu;font-size:13px;color:#6b6b6b;">
            <a href="<?php echo e(route('home')); ?>" style="color:#1B3A7A;">Home</a>
            <i class="fas fa-angle-right mx-2 text-xs"></i>
            <span>Contact Us</span>
        </p>
    </div>
</div>


<div style="background:#F5821F;padding:24px 0;">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            <a href="tel:+919699911101" style="color:#fff;text-decoration:none;">
                <i class="fas fa-phone-alt" style="font-size:20px;margin-bottom:6px;display:block;"></i>
                <p style="font-family:Montserrat;font-weight:700;font-size:13px;margin-bottom:2px;">OPD Helpline</p>
                <p style="font-family:Ubuntu;font-size:12px;opacity:0.9;">9699 911101</p>
            </a>
            <a href="tel:+919819494485" style="color:#fff;text-decoration:none;">
                <i class="fas fa-ambulance" style="font-size:20px;margin-bottom:6px;display:block;"></i>
                <p style="font-family:Montserrat;font-weight:700;font-size:13px;margin-bottom:2px;">ICU Helpline</p>
                <p style="font-family:Ubuntu;font-size:12px;opacity:0.9;">98194 94485</p>
            </a>
            <div style="color:#fff;">
                <i class="fas fa-clock" style="font-size:20px;margin-bottom:6px;display:block;"></i>
                <p style="font-family:Montserrat;font-weight:700;font-size:13px;margin-bottom:2px;">Working Hours</p>
                <p style="font-family:Ubuntu;font-size:12px;opacity:0.9;">24×7 | 365 Days</p>
            </div>
            <a href="mailto:info@bilal-hospital.com" style="color:#fff;text-decoration:none;">
                <i class="fas fa-envelope" style="font-size:20px;margin-bottom:6px;display:block;"></i>
                <p style="font-family:Montserrat;font-weight:700;font-size:13px;margin-bottom:2px;">Email Us</p>
                <p style="font-family:Ubuntu;font-size:12px;opacity:0.9;">info@bilal-hospital.com</p>
            </a>
        </div>
    </div>
</div>


<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5">
        <div class="grid lg:grid-cols-2 gap-16">

            
            <div data-aos="fade-right">
                <p class="section-tag">Send a Message</p>
                <h2 class="section-title" style="font-size:clamp(1.6rem,3vw,2.4rem);">We'd Love to Hear<br>From You</h2>
                <div class="section-divider"></div>

                <?php if(session('success')): ?>
                <div style="background:#f0fdf4;border:1px solid #bbf7d0;color:#15803d;border-radius:8px;padding:14px 18px;margin-bottom:20px;display:flex;align-items:center;gap:10px;font-family:Ubuntu;font-size:14px;">
                    <i class="fas fa-check-circle text-xl"></i><span><?php echo e(session('success')); ?></span>
                </div>
                <?php endif; ?>

                <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-5">
                    <?php echo csrf_field(); ?>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">YOUR NAME *</label>
                            <input type="text" name="name" required value="<?php echo e(old('name')); ?>"
                                style="width:100%;border:2px solid #e5e7eb;border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;transition:border-color 0.2s;box-sizing:border-box;"
                                onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                                placeholder="Full Name">
                        </div>
                        <div>
                            <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">PHONE NUMBER *</label>
                            <input type="tel" name="phone" required value="<?php echo e(old('phone')); ?>"
                                style="width:100%;border:2px solid #e5e7eb;border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;transition:border-color 0.2s;box-sizing:border-box;"
                                onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                                placeholder="Mobile Number">
                        </div>
                    </div>
                    <div>
                        <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">EMAIL ADDRESS</label>
                        <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                            style="width:100%;border:2px solid #e5e7eb;border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;transition:border-color 0.2s;box-sizing:border-box;"
                            onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                            placeholder="your@email.com">
                    </div>
                    <div>
                        <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">SUBJECT</label>
                        <input type="text" name="subject" value="<?php echo e(old('subject')); ?>"
                            style="width:100%;border:2px solid #e5e7eb;border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;transition:border-color 0.2s;box-sizing:border-box;"
                            onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                            placeholder="How can we help?">
                    </div>
                    <div>
                        <label style="font-family:Montserrat;font-size:12px;font-weight:700;color:#1B3A7A;display:block;margin-bottom:8px;letter-spacing:0.5px;">MESSAGE *</label>
                        <textarea name="message" required rows="5"
                            style="width:100%;border:2px solid #e5e7eb;border-radius:6px;padding:12px 16px;font-family:Ubuntu;font-size:14px;color:#333;outline:none;transition:border-color 0.2s;resize:vertical;box-sizing:border-box;"
                            onfocus="this.style.borderColor='#1B3A7A'" onblur="this.style.borderColor='#e5e7eb'"
                            placeholder="Write your message here..."><?php echo e(old('message')); ?></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="width:100%;justify-content:center;">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

            
            <div data-aos="fade-left" class="space-y-6">
                <p class="section-tag">Our Location</p>
                <h2 class="section-title" style="font-size:clamp(1.6rem,3vw,2.4rem);">Visit Bilal Hospital</h2>
                <div class="section-divider"></div>

                <div class="space-y-5">
                    <?php
                    $contacts = [
                        ['icon'=>'fa-map-marker-alt','label'=>'Address','value'=>'1st Floor, A Wing, Royal Garden, Old Mumbai-Pune Road, Near Shimla Park, Mumbra, Thane – 400612','link'=>null],
                        ['icon'=>'fa-phone-alt','label'=>'OPD Numbers','value'=>'9699 911101 | 9867 934366 | 022-2535 1500','link'=>'tel:+919699911101'],
                        ['icon'=>'fa-heartbeat','label'=>'ICU & Maternity','value'=>'98194 94485 | 96192 52425','link'=>'tel:+919819494485'],
                        ['icon'=>'fa-clock','label'=>'Working Hours','value'=>'24 Hours × 7 Days × 365 Days','link'=>null],
                        ['icon'=>'fa-envelope','label'=>'Email','value'=>'info@bilal-hospital.com','link'=>'mailto:info@bilal-hospital.com'],
                    ];
                    ?>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="display:flex;gap:16px;align-items:flex-start;">
                        <div style="width:48px;height:48px;background:rgba(27,58,122,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="fas <?php echo e($item['icon']); ?>" style="color:#1B3A7A;font-size:18px;"></i>
                        </div>
                        <div>
                            <p style="font-family:Montserrat;font-weight:700;font-size:12px;color:#1B3A7A;margin-bottom:4px;letter-spacing:0.5px;text-transform:uppercase;"><?php echo e($item['label']); ?></p>
                            <?php if($item['link']): ?>
                            <a href="<?php echo e($item['link']); ?>" style="font-family:Ubuntu;font-size:14px;color:#6b6b6b;text-decoration:none;"><?php echo e($item['value']); ?></a>
                            <?php else: ?>
                            <p style="font-family:Ubuntu;font-size:14px;color:#6b6b6b;"><?php echo e($item['value']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div style="background:linear-gradient(135deg,#dc2626,#b91c1c);border-radius:12px;padding:28px;text-align:center;margin-top:28px;">
                    <i class="fas fa-ambulance" style="color:#fff;font-size:36px;margin-bottom:12px;display:block;"></i>
                    <h3 style="font-family:Montserrat;font-weight:800;color:#fff;font-size:18px;margin-bottom:6px;">Emergency? Call Now</h3>
                    <a href="tel:+919699911101" style="font-family:Montserrat;font-weight:900;color:#fff;font-size:26px;text-decoration:none;display:block;margin-bottom:6px;">9699 911101</a>
                    <p style="font-family:Ubuntu;color:rgba(255,255,255,0.8);font-size:13px;">Available 24×7 for Medical Emergencies</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section style="padding:0;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.0!2d73.0150!3d19.1800!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf5b8f5e5555%3A0x0!2sBilal+Hospital%2C+Mumbra!5e0!3m2!1sen!2sin!4v1600000000000"
        style="width:100%;height:420px;border:0;display:block;" allowfullscreen loading="lazy"></iframe>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\htdocs\projects\bilal\New folder\New folder\bilal-hospital\bilal-hospital-website\resources\views/pages/contact.blade.php ENDPATH**/ ?>