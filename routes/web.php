<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AdminLoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/order', [OrderController::class, 'store']);
Route::get('/api/templates', [TemplateController::class, 'index']);

// Login (tidak diproteksi)
Route::get('/admin/login', [AdminLoginController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Admin (diproteksi)
Route::middleware('admin.auth')->group(function () {
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::patch('/admin/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.status');
    Route::get('/admin/templates', [TemplateController::class, 'adminIndex'])->name('admin.templates');
    Route::post('/admin/templates', [TemplateController::class, 'store'])->name('admin.templates.store');
    Route::delete('/admin/templates/{id}', [TemplateController::class, 'destroy'])->name('admin.templates.destroy');
});
