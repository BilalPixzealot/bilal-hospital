<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CashlessController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
Route::get('/departments/{slug}', [DepartmentController::class, 'show'])->name('departments.show');
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors');
Route::get('/doctors/{slug}', [DoctorController::class, 'show'])->name('doctors.show');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/cashless', [CashlessController::class, 'index'])->name('cashless');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/book-appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::post('/book-appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/api/doctors/{department_id}', [DoctorController::class, 'byDepartment'])->name('doctors.by-department');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', function () {
    return response("User-agent: *\nAllow: /\nSitemap: " . url('/sitemap.xml'), 200, ['Content-Type' => 'text/plain']);
});

// Auth routes (manual login only — no registration)
Route::get('/admin/login', [\App\Http\Controllers\Auth\AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login.post');
Route::post('/admin/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Settings
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');

    // Departments
    Route::resource('departments', \App\Http\Controllers\Admin\DepartmentController::class);

    // Doctors
    Route::resource('doctors', \App\Http\Controllers\Admin\DoctorController::class);

    // Gallery
    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);

    // Testimonials
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);

    // Appointments
    Route::get('/appointments', [\App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('appointments.index');
    Route::post('/appointments/{appointment}/status', [\App\Http\Controllers\Admin\AppointmentController::class, 'updateStatus'])->name('appointments.status');
    Route::delete('/appointments/{appointment}', [\App\Http\Controllers\Admin\AppointmentController::class, 'destroy'])->name('appointments.destroy');

    // Contacts
    Route::get('/contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contacts.destroy');

    // Posts
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);

    // Stats
    Route::resource('stats', \App\Http\Controllers\Admin\StatController::class);

    // Insurance
    Route::resource('insurance', \App\Http\Controllers\Admin\InsuranceController::class);
});
