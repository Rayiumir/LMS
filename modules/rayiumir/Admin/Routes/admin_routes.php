<?php

use Illuminate\Support\Facades\Route;
use Modules\Rayiumir\Admin\Http\Controllers\AdminController;

Route::group([], static function ($router){

    // Admin

    $router->resource('/admin', AdminController::class)->except('show');

});
