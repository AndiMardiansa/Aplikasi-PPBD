<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PPDBController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\UserProfileController;

Route::get('/', function () {
    return view('index');
});
// Route::get('/index', function () {
//     return view('index');
// });

// Auth Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login.show');

Route::post('/login', [LoginController::class, 'loginpost'])->name('login.post');

// Registration Routes
Route::get('/register', [LoginController::class, 'register'])->name('register.show');
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
    
    // User Profile routes
    Route::get('/user/profile', [UserProfileController::class, 'edit'])->name('user.profile.edit');
    Route::patch('/user/profile', [UserProfileController::class, 'update'])->name('user.profile.update');
    Route::put('/user/profile/password', [UserProfileController::class, 'updatePassword'])->name('user.profile.password');
});

// Admin routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Admin Profile routes
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
