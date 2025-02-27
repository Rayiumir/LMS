<?php

use Illuminate\Support\Facades\Route;
use Modules\Rayiumir\Admin\Http\Controllers\AdminController;

Route::group(['prefix' => 'admin'], static function ($router){

    // Admin

    $router->resource('/', AdminController::class)->except('show');

});
