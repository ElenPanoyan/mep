<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/qr', [QRController::class, 'show']);
