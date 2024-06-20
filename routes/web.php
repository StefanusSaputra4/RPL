<?php

use App\Http\Controllers\SparepartMotorController;
use App\Models\Sparepart_Motor;
use Illuminate\Support\Facades\Route;

Route::get('/', [SparepartMotorController::class, 'index']);

Route::get('/product', function () {
    return view('product');
});

Route::get('/payment', function () {
    return view('payment');
});
