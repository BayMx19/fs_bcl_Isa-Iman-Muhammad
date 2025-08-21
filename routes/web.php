<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ArmadaController as AdminArmadaController;
use App\Http\Controllers\Admin\JenisKendaraanController as AdminJenisKendaraanController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth', RoleMiddleware::class.':Admin'])->prefix('admin')->as('admin.')->group(function() {
    Route::resource('dashboard', AdminDashboardController::class);
    Route::resource('jenis-kendaraan', AdminJenisKendaraanController::class);
    Route::resource('armada', AdminArmadaController::class);
});

Route::middleware(['auth', RoleMiddleware::class.':User'])->prefix('user')->as('user.')->group(function() {
    // Tambahkan route user
});

Route::middleware(['auth', RoleMiddleware::class.':Driver'])->prefix('driver')->as('driver.')->group(function() {
    // Tambahkan route driver
});
