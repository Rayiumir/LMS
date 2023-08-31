<?php

use Illuminate\Support\Facades\Route;
use modules\LMS\User\Http\Controllers\Auth\LoginController;
use modules\LMS\User\Http\Controllers\Auth\RegisterController;
use modules\LMS\User\Http\Controllers\Auth\ResetPasswordController;

Route::group(['namespace' => 'LMS\User', 'middleware' => 'web'], function ($router){
    Auth::routes();

    // برای وورد به سایت

    $router->get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    $router->post('/login', [LoginController::class, 'login'])->name('login');

    // برای عضویت به سایت

    $router->get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    $router->get('/post', [RegisterController::class, 'register'])->name('register');

    // برگردانی رمز عبور

    $router->get('/password/change',[ResetPasswordController::class, 'showResetForm'])
        ->name('password.showResetForm')->middleware('auth');
    $router->post('/password/change', [ResetPasswordController::class, 'reset'])->name('password.update');
});
