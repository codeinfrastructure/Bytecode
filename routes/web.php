<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('login', function() {
        return view('auth.login');
    })->name('login');
    
    Route::post('login', LoginController::class)->name('login.attempt');

    Route::get('register', function () {
        return view('auth.register');
    })->name('register');
    
    Route::post('register', RegisterController::class)->name('register.store');
    Route::get('password/forgot', [ForgotPasswordController::class, 'forgot'])->name('password.forgot');
    Route::post('password/forgot', [ForgotPasswordController::class, 'reset'])->name('password.reset');
    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'resetlink'])->name('password.reset.link');
    Route::post('password/reset/email/submit', [ForgotPasswordController::class, 'resetpassword'])->name('password.reset.link.submit');

});

Route::view('dashboard', 'dashboard')->name('dashboard');

Route::post('logout', function () {
    Auth::guard('web')->logout();

    Session::invalidate();
    Session::regenerateToken();

    return redirect('/');
})->name('logout');
