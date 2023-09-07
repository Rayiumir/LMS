<?php

use modules\LMS\Admin\Http\Controllers\AdminController;

Route::group(['middleware' => ['web', 'auth']], function ($router){
    $router->resource('/admin', AdminController::class)->except('show');
});
