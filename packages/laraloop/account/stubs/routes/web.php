<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth;
use App\Http\Controllers\Account;

// Dashboard

Route::view('/dashboard', 'dashboard')->name('dashboard');

// Auth

Route::middleware('guest')->group(function() {
    Route::get('/register', [Auth\RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [Auth\RegisteredUserController::class, 'store']);
    Route::get('/login', [Auth\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [Auth\AuthenticatedSessionController::class, 'store']);
    Route::get('/forgot-password', [Auth\PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [Auth\PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('/reset-password/{token}', [Auth\NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [Auth\NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth')->group(function() {
    Route::get('/verify-email', Auth\EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('/verify-email/{id}/{hash}', Auth\VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('/email/verification-notification', [Auth\EmailVerificationNotificationController::class, 'store'])->middleware(['throttle:6,1'])->name('verification.send');
    Route::get('/confirm-password', [Auth\ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('/confirm-password', [Auth\ConfirmablePasswordController::class, 'store']);
    Route::post('/logout', [Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Account routes

Route::middleware('auth')->group(function() {
    Route::get('account', [Account\AccountController::class, 'edit'])->name('account.edit');
    Route::put('account/update', [Account\AccountController::class, 'update'])->name('account.update');
    Route::put('account/update-password', Account\UpdatePasswordController::class)->name('account.update_password');
    Route::put('account/update-avatar', Account\UpdateAvatarController::class)->name('account.update_avatar');
    Route::delete('account/delete', Account\DeleteController::class)->name('account.destroy');
    Route::delete('account/logout-other-browser-sessions', Account\LogoutFromOtherSessions::class)->name('account.logout_other_browser_sessions');
});
