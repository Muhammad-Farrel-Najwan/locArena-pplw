<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingPage;

Route::get('/', [landingPage::class, 'index']) ->name('landing');
