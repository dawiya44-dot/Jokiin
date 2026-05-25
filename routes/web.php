<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/order', [OrderController::class, 'store']);
Route::get('/api/templates', [TemplateController::class, 'index']);

Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders');
Route::patch('/admin/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.status');

Route::get('/admin/templates', [TemplateController::class, 'adminIndex'])->name('admin.templates');
Route::post('/admin/templates', [TemplateController::class, 'store'])->name('admin.templates.store');
Route::delete('/admin/templates/{id}', [TemplateController::class, 'destroy'])->name('admin.templates.destroy');
