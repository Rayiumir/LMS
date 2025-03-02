<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], static function ($router){

    // Admin

    $router->resource('/categories', \Modules\Rayiumir\Category\Http\Controllers\CategoryController::class)->except('show');

});
