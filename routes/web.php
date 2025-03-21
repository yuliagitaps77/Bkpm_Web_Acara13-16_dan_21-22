<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\Backend\ApiPendidikanController;


Route::resource('/dashboard', DashboardController::class);

Route::prefix('backend')->group(function () {
 Route::resource('dashboard', DashboardController::class);
 Route::resource('pendidikan', PendidikanController::class);
 Route::resource('pengalaman_kerja', PengalamanKerjaController::class);

 Route::get('/pengalaman-kerja/search', [PengalamanKerjaController::class, 'search'])->name('pengalaman_kerja.search');

 
 Route::controller(ApiPendidikanController::class)->group(function () {
    Route::get('api_pendidikan', 'getAll');
    Route::get('api_pendidikan/{id}', 'getPenById');
    Route::post('api_pendidikan', 'create');
    Route::put('api_pendidikan/{id}', 'update');
    Route::delete('api_pendidikan/{id}', 'deletePen');
});

});
