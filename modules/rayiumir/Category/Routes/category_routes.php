<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'web'], static function ($router){

    // Admin

    $router->resource('/categories', \Modules\Rayiumir\Category\Http\Controllers\CategoryController::class)->except('show');

});
