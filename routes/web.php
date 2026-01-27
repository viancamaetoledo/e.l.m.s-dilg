<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;


Route::get('/', [NavigationController::class, 'Welcome'])->name('welcome.landing');
Route::get('/User-Dashboard', [NavigationController::class, 'goUserDashboard'])->name('user.dashboard');
