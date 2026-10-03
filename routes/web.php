<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lapanganController;


Route::get('/',[lapanganController::class, 'getLapangan'])->name('landing');
