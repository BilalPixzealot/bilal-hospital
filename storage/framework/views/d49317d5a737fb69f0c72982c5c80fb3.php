<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc><?php echo e(url('/')); ?></loc><changefreq>weekly</changefreq><priority>1.0</priority></url>
    <url><loc><?php echo e(url('/about')); ?></loc><changefreq>monthly</changefreq><priority>0.8</priority></url>
    <url><loc><?php echo e(url('/departments')); ?></loc><changefreq>weekly</changefreq><priority>0.9</priority></url>
    <url><loc><?php echo e(url('/doctors')); ?></loc><changefreq>weekly</changefreq><priority>0.9</priority></url>
    <url><loc><?php echo e(url('/gallery')); ?></loc><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc><?php echo e(url('/cashless')); ?></loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo e(url('/blog')); ?></loc><changefreq>daily</changefreq><priority>0.7</priority></url>
    <url><loc><?php echo e(url('/contact')); ?></loc><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc><?php echo e(url('/book-appointment')); ?></loc><changefreq>monthly</changefreq><priority>0.8</priority></url>
    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <url><loc><?php echo e(url('/departments/' . $dept->slug)); ?></loc><lastmod><?php echo e($dept->updated_at->toAtomString()); ?></lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <url><loc><?php echo e(url('/doctors/' . $doctor->slug)); ?></loc><lastmod><?php echo e($doctor->updated_at->toAtomString()); ?></lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <url><loc><?php echo e(url('/blog/' . $post->slug)); ?></loc><lastmod><?php echo e($post->updated_at->toAtomString()); ?></lastmod><changefreq>monthly</changefreq><priority>0.5</priority></url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset>
<?php /**PATH D:\projects\htdocs\projects\bilal\New folder\New folder\bilal-hospital\bilal-hospital-website\resources\views/sitemap.blade.php ENDPATH**/ ?>