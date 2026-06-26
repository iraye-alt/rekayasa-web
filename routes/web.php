<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

// Admin Auth Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('admin')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        
        // CRUD Routes
        Route::resource('artikel', \App\Http\Controllers\Admin\ArtikelController::class)->names('admin.artikel');
        Route::get('artikel/export/pdf', [\App\Http\Controllers\Admin\ArtikelController::class, 'exportPdf'])->name('admin.artikel.pdf');

        Route::resource('company-profile', \App\Http\Controllers\Admin\CompanyProfileController::class)->names('admin.company_profile');
        Route::resource('product', \App\Http\Controllers\Admin\ProductController::class)->names('admin.product');
        Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class)->names('admin.gallery');
    });
});