<?php

use Illuminate\Support\Facades\Route;
use modules\LMS\User\Http\Controllers\Auth\LoginController;

Route::group(['namespace' => 'LMS\User', 'middleware' => 'web'], function ($router){
    Auth::routes();

    $router->get('/login', [LoginController::class])->name('login');
    $router->post('/login', [LoginController::class, 'login'])->name('login');
});
