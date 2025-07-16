<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminAuthController;

// Form Pendaftaran
Route::get('/daftar', [MemberController::class, 'create']);
Route::post('/daftar', [MemberController::class, 'store']);

// Halaman List Member Approved
Route::get('/members', [MemberController::class, 'approvedList']);

// Untuk Admin
Route::get('/members/pending', [MemberController::class, 'pendingList']);
Route::post('/members/approve/{id}', [MemberController::class, 'approve']);
Route::get('/members/edit/{id}', [MemberController::class, 'edit']);
Route::put('/members/update/{id}', [MemberController::class, 'update']);
Route::delete('/members/delete/{id}', [MemberController::class, 'destroy']);

Route::post('/members/approve/{id}', [MemberController::class, 'approve'])->name('members.approve');

// routes/web.php
Route::get('/', [\App\Http\Controllers\LandingController::class, 'index'])->name('landing');
// Route::get('/', function () {
//     return view('landing');
// });


Route::get('/daftar', [App\Http\Controllers\MemberController::class, 'create'])->name('daftar');



// Tampilkan form login admin
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');

// Proses login admin
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Logout admin
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/members/pending', [MemberController::class, 'pendingList']);
Route::post('/members/approve/{id}', [MemberController::class, 'approve']);
Route::get('/members/edit/{id}', [MemberController::class, 'edit']);
Route::put('/members/update/{id}', [MemberController::class, 'update']);
Route::delete('/members/delete/{id}', [MemberController::class, 'destroy']);

Route::post('/members/approve/{id}', [MemberController::class, 'approve'])->name('members.approve');
});


Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');




