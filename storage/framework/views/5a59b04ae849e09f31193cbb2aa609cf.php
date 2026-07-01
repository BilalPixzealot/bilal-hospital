<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin'); ?> - Bilal Hospital Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = { theme: { extend: { colors: { primary: '#0A3D6B', accent: '#10B981' } } } }</script>
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-100 min-h-screen flex">


<aside class="w-64 bg-primary min-h-screen flex flex-col fixed left-0 top-0 z-30">
    <div class="p-6 border-b border-blue-800">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center"><i class="fas fa-hospital text-white"></i></div>
            <div class="text-white"><div class="font-bold text-sm">Bilal Hospital</div><div class="text-xs text-blue-300">Admin Panel</div></div>
        </div>
    </div>
    <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
        <?php
        $navItems = [
            ['route' => 'admin.dashboard', 'icon' => 'fa-chart-pie', 'label' => 'Dashboard'],
            ['route' => 'admin.departments.index', 'icon' => 'fa-building', 'label' => 'Departments'],
            ['route' => 'admin.doctors.index', 'icon' => 'fa-user-md', 'label' => 'Doctors'],
            ['route' => 'admin.gallery.index', 'icon' => 'fa-images', 'label' => 'Gallery'],
            ['route' => 'admin.testimonials.index', 'icon' => 'fa-star', 'label' => 'Testimonials'],
            ['route' => 'admin.appointments.index', 'icon' => 'fa-calendar-check', 'label' => 'Appointments'],
            ['route' => 'admin.contacts.index', 'icon' => 'fa-envelope', 'label' => 'Contact Messages'],
            ['route' => 'admin.posts.index', 'icon' => 'fa-newspaper', 'label' => 'Blog Posts'],
            ['route' => 'admin.stats.index', 'icon' => 'fa-chart-bar', 'label' => 'Stats'],
            ['route' => 'admin.insurance.index', 'icon' => 'fa-shield-alt', 'label' => 'Insurance'],
            ['route' => 'admin.settings.index', 'icon' => 'fa-cog', 'label' => 'Settings'],
        ];
        ?>
        <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route($item['route'])); ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all <?php echo e(request()->routeIs(str_replace('.index', '*', $item['route'])) ? 'bg-white/20 text-white' : 'text-blue-200 hover:bg-white/10 hover:text-white'); ?>">
            <i class="fas <?php echo e($item['icon']); ?> w-4"></i> <?php echo e($item['label']); ?>

        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </nav>
    <div class="p-4 border-t border-blue-800">
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button class="flex items-center gap-3 text-blue-200 hover:text-white text-sm w-full px-3 py-2 rounded-lg hover:bg-white/10 transition-all">
                <i class="fas fa-sign-out-alt w-4"></i> Logout
            </button>
        </form>
    </div>
</aside>


<div class="ml-64 flex-1 flex flex-col min-h-screen">
    
    <header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center sticky top-0 z-20">
        <h1 class="font-bold text-gray-800"><?php echo $__env->yieldContent('title', 'Dashboard'); ?></h1>
        <div class="flex items-center gap-4">
            <a href="<?php echo e(route('home')); ?>" target="_blank" class="text-sm text-gray-500 hover:text-primary flex items-center gap-1"><i class="fas fa-external-link-alt"></i> View Site</a>
            <div class="w-9 h-9 bg-primary rounded-full flex items-center justify-center text-white text-sm font-bold">A</div>
        </div>
    </header>

    <main class="flex-1 p-6">
        <?php if(session('success')): ?>
        <div class="bg-green-50 border border-green-200 text-green-700 rounded-lg p-4 mb-6 flex items-center gap-2">
            <i class="fas fa-check-circle"></i> <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
        <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 mb-6 flex items-center gap-2">
            <i class="fas fa-exclamation-circle"></i> <?php echo e(session('error')); ?>

        </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('admin-content'); ?>
    </main>
</div>

</body>
</html>
<?php /**PATH D:\projects\htdocs\projects\bilal\New folder\New folder\bilal-hospital\bilal-hospital-website\resources\views/layouts/admin.blade.php ENDPATH**/ ?>