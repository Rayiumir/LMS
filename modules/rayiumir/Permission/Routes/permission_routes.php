<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'web'], static function ($router){

    // Admin

    $router->resource('/permissions', \Modules\Rayiumir\Permission\Http\Controllers\PermissionController::class)->except('show');

});
