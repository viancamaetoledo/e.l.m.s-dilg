<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;


Route::get('/', [NavigationController::class, 'Welcome'])->name('welcome.landing');
Route::get('/User-Dashboard', [NavigationController::class, 'goUserDashboard'])->name('user.dashboard');
Route::get('/Admin-Dashboard', [NavigationController::class, 'goAdminDashboard'])->name('admin.dashboard');
Route::get('/Leave-Application-Form', [NavigationController::class, 'goLeaveForm'])->name('user.leave-form');