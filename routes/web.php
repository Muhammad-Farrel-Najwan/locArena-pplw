<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingPageController;


Route::get('/',[landingPageController::class, 'index'])->name('landing');
