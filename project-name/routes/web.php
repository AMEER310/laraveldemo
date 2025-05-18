<?php
use App\Http\Controllers\patientController;

Route::resource('datapatient', patientController::class);
use App\Http\Controllers\appointmentController;

Route::resource('dataappointment', appointmentController::class);
use App\Http\Controllers\reportController;

Route::resource('datareport', reportController::class);



use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
