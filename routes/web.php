<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;


Route::get('/', [NavigationController::class, 'Welcome'])->name('welcome.landing');
Route::get('/User-Dashboard', [NavigationController::class, 'goUserDashboard'])->name('user.dashboard');






Route::get('/User-Dashboard', [NavigationController::class, 'goUserDashboard'])->name('user.dashboard');
Route::get('/Leave-Application-Form', [NavigationController::class, 'goLeaveForm'])->name('user.leave-form');
Route::get('/CTO-Application-Form', [NavigationController::class, 'goCTOForm'])->name('user.cto-form');
Route::get('/Employee-Leave-Summary', [NavigationController::class, 'goEmployeeLeaveSummary'])->name('user.summary');




Route::get('/Admin-Dashboard', [NavigationController::class, 'goAdminDashboard'])->name('admin.dashboard');
<<<<<<< HEAD
=======
Route::get('/Employee-Info-Credit', [NavigationController::class, 'goEmployeeInfoCredit'])->name('admin.employee-info-credit');
Route::get('/Show-Employee-Leave-Cards', [NavigationController::class, 'goShowEmployeeLeaveCard'])->name('admin.show-employee-leave-cards');
Route::get('/Admin-Leave-Application', [NavigationController::class, 'goAdminLeaveRecord'])->name('admin.leave-record');
Route::get('/Admin-CTO-Application', [NavigationController::class, 'goAdminCTORecord'])->name('admin.cto-record');
Route::get('/Admin-Reports', [NavigationController::class, 'goAdminReports'])->name('admin.reports');
Route::get('/Admin-Settings', [NavigationController::class, 'goAdminSettings'])->name('admin.settings');




>>>>>>> e39fd0a (info-credit)
