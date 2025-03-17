<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\Backend\PengalamanKerjaController;


Route::resource('/dashboard', DashboardController::class);

Route::prefix('backend')->group(function () {
 Route::resource('dashboard', DashboardController::class);
 Route::resource('pendidikan', PendidikanController::class);
 Route::resource('pengalaman_kerja', PengalamanKerjaController::class);

 Route::get('/pengalaman-kerja/search', [PengalamanKerjaController::class, 'search'])->name('pengalaman_kerja.search');

 
});
