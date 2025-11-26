<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoiceController;

Route::post('/upload-audio', [VoiceController::class, 'store']);
