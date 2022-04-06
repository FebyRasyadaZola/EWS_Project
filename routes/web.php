<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\idnodeController;
use App\Http\Controllers\chartcontroller;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('/waterlevel', [idnodeController::class, 'Air']);

Route::get('/temperature', [idnodeController::class, 'Suhu']);

Route::get('/humidity', [idnodeController::class, 'Kelembaban']);

Route::get('/Node1', [idnodeController::class, 'n1']);

Route::get('/Node2', [idnodeController::class, 'n2']);

Route::get('/Node3', [idnodeController::class, 'n3']);

Route::get('/Node4', [idnodeController::class, 'n4']);

Route::get('/AllofData', [idnodeController::class, 'all']);

Route::get('/grafik_WL', [chartController::class, 'Line_W']);

Route::get('/grafik_T', [chartController::class, 'Line_T']);

Route::get('/grafik_H', [chartController::class, 'Line_H']);


Route::get('/grafik', [chartcontroller::class, 'LineChart',]);

