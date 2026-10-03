<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lapanganController;

// Route::get('/', function () {
//     return view('helloworld');
// });

Route::get('/',[lapanganController::class, 'getLapangan']);
