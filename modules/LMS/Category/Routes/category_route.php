<?php

use modules\LMS\Category\Http\Controllers\CategoryController;

Route::group(['middleware' => ['web', 'auth']], function ($router){
    $router->resource('/category', CategoryController::class)->except('show');
});
