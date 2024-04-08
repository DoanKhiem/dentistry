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

Route::get('/register', [\App\Http\Controllers\AuthUserController::class, 'showRegisterForm'])->name('user.register');
Route::post('/postRegister', [\App\Http\Controllers\AuthUserController::class, 'register'])->name('user.postRegister');
Route::get('/login', [\App\Http\Controllers\AuthUserController::class, 'showLoginForm'])->name('user.login');
Route::post('/postLogin', [\App\Http\Controllers\AuthUserController::class, 'login'])->name('user.postLogin');
Route::get('/logout', [\App\Http\Controllers\AuthUserController::class, 'logout'])->name('user.logout');

Route::get('/', [\App\Http\Controllers\Controller::class, 'home'])->name('home');
Route::middleware('user')->group(function () {
    Route::get('/history', [\App\Http\Controllers\Controller::class, 'history'])->name('history');

    Route::get('/booking', [\App\Http\Controllers\Controller::class, 'booking'])->name('booking');

    Route::post('/booking', [\App\Http\Controllers\Controller::class, 'bookingCreate'])->name('booking.create');
});

Route::middleware('admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Controller::class, 'dashboard'])->name('dashboard');
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

        Route::get('edit-profile', [\App\Http\Controllers\Controller::class, 'editProfile'])->name('edit.profile');

        Route::put('update-profile', [\App\Http\Controllers\Controller::class, 'updateProfile'])->name('profile.store');
    });
});

require __DIR__.'/auth.php';
