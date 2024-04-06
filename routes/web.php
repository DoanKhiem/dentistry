<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Controller::class, 'home'])->name('home');

Route::get('/history', [\App\Http\Controllers\Controller::class, 'history'])->name('history');

Route::get('/booking', [\App\Http\Controllers\Controller::class, 'booking'])->name('booking');

Route::post('/booking', [\App\Http\Controllers\Controller::class, 'bookingCreate'])->name('booking.create');

Route::get('/dashboard', [\App\Http\Controllers\Controller::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // staff
    Route::resource('staff', \App\Http\Controllers\StaffController::class);

    // doctor
    Route::resource('doctor', \App\Http\Controllers\DoctorController::class);

    // patient
    Route::resource('patient', \App\Http\Controllers\PatientController::class);

    // appointment
    Route::resource('appointment', \App\Http\Controllers\AppointmentController::class);

    // service
    Route::resource('service', \App\Http\Controllers\ServiceController::class);

    Route::get('/reset-password', function (
    ) {
        return view('reset-password');
    })->name('change.pass');

    Route::get('/statistical', [\App\Http\Controllers\Controller::class, 'statistical'])->name('statistical');



});



require __DIR__.'/auth.php';
