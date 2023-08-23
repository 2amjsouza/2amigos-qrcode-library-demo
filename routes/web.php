<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

Route::name('qrcode')->group(function() {
    Route::get('/', [QrCodeController::class, 'index']);
    Route::get('/resource/{content}', [QrCodeController::class, 'resource']);
});
