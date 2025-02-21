<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], static function ($router){

    // Admin
    $router->get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    $router->get('/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

});
