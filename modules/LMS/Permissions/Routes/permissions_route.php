<?php

use modules\LMS\Permissions\Http\Controllers\PermissionController;

Route::group(['middleware' => ['web', 'auth']], function ($router){
    $router->resource('/permissions', PermissionController::class )->except('show');
});
