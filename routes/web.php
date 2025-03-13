<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['namespace' => 'App\Http\Controllers\backend'], function () {
    Route::resource('dashboard', DashboardController::class);
});

Route::group(['namespace' => 'backend'], function() 
{
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
});
