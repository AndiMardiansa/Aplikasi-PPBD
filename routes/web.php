<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\UserProfileController;
use App\Models\Faq;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $faqs = Faq::where('is_active', true)->orderBy('order')->orderBy('id')->get();

    return view('index', ['faqs' => $faqs]);
});
// Route::get('/index', function () {
//     return view('index');
// });

// Auth Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'loginpost'])->name('login.post');

// Registration Routes
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registerpost'])->name('register.post');

// Admin dashboard
Route::get('/home_admin', [DashboardAdminController::class, 'dashboard'])->name('home_admin');

// User routes
Route::middleware(['auth'])->group(function () {
    // User Dashboard
    Route::get('/home', [PPDBController::class, 'dashboard'])->name('home');

    // PPDB Registration
    Route::get('/ppdb/register', [PPDBController::class, 'showRegistrationForm'])->name('register.ppdb');
    Route::post('/ppdb/register', [PPDBController::class, 'register'])->name('register.ppdb.post');
    Route::get('/ppdb/details', [PPDBController::class, 'showRegistration'])->name('ppdb.details');
    Route::get('/ppdb/calon-siswa', [PPDBController::class, 'showCalonSiswa'])->name('ppdb.calon-siswa');
    Route::get('/ppdb/biodata', [PPDBController::class, 'showBiodata'])->name('ppdb.biodata');
    Route::get('/ppdb/daftar-ulang', [PPDBController::class, 'showDaftarUlang'])->name('ppdb.daftar-ulang');
    Route::get('/ppdb/download/{type}/{filename}', [PPDBController::class, 'downloadDocument'])->name('ppdb.download');

    // User Profile routes
    Route::get('/user/profile', [UserProfileController::class, 'edit'])->name('user.profile.edit');
    Route::patch('/user/profile', [UserProfileController::class, 'update'])->name('user.profile.update');
});

// Admin routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'dashboard'])->name('admin.dashboard');

    // Calon Siswa
    Route::get('/admin/calon-siswa', [AdminController::class, 'calonSiswa'])->name('admin.calon-siswa');
    Route::get('/admin/calon-siswa/{student}', [AdminController::class, 'calonSiswaShow'])->name('admin.calon-siswa.show');
    Route::patch('/admin/calon-siswa/{student}/status', [AdminController::class, 'updateStatus'])->name('admin.calon-siswa.status');

    // Status
    Route::get('/admin/status', [AdminController::class, 'status'])->name('admin.status');

    // Daftar Ulang
    Route::get('/admin/daftar-ulang', [AdminController::class, 'daftarUlang'])->name('admin.daftar-ulang');
    Route::patch('/admin/daftar-ulang/{student}', [AdminController::class, 'updateDaftarUlang'])->name('admin.daftar-ulang.update');

    // Siswa (terverifikasi)
    Route::get('/admin/siswa', [AdminController::class, 'siswa'])->name('admin.siswa');

    // Kelas
    Route::get('/admin/kelas', [AdminController::class, 'kelasIndex'])->name('admin.kelas.index');
    Route::get('/admin/kelas/create', [AdminController::class, 'kelasCreate'])->name('admin.kelas.create');
    Route::post('/admin/kelas', [AdminController::class, 'kelasStore'])->name('admin.kelas.store');
    Route::get('/admin/kelas/{kelas}/edit', [AdminController::class, 'kelasEdit'])->name('admin.kelas.edit');
    Route::put('/admin/kelas/{kelas}', [AdminController::class, 'kelasUpdate'])->name('admin.kelas.update');
    Route::delete('/admin/kelas/{kelas}', [AdminController::class, 'kelasDestroy'])->name('admin.kelas.destroy');

    // FAQ
    Route::get('/admin/faq', [AdminController::class, 'faqIndex'])->name('admin.faq.index');
    Route::get('/admin/faq/create', [AdminController::class, 'faqCreate'])->name('admin.faq.create');
    Route::post('/admin/faq', [AdminController::class, 'faqStore'])->name('admin.faq.store');
    Route::get('/admin/faq/{faq}/edit', [AdminController::class, 'faqEdit'])->name('admin.faq.edit');
    Route::put('/admin/faq/{faq}', [AdminController::class, 'faqUpdate'])->name('admin.faq.update');
    Route::delete('/admin/faq/{faq}', [AdminController::class, 'faqDestroy'])->name('admin.faq.destroy');

    // Admin Profile routes
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
