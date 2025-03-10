<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::resource('dashboard', DashboardController::class);
});

Route::group(['namespace' => 'Backend'], function() 
{
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
});
