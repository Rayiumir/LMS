<?php

use modules\LMS\Home\Http\Controllers\HomeController;

Route::group(['namespace' => 'LMS\Home'], function ($router){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
