<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home']);
Route::get('/tentang-kami', [PageController::class, 'tentang']);
Route::get('/kontak-kami', [PageController::class, 'kontak']);
