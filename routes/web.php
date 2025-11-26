<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoiceController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/upload-audio', [VoiceController::class, 'store']);