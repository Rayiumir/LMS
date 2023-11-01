<?php

use modules\LMS\Course\Http\Controllers\CourseController;

Route::group(['middleware' => ['web', 'auth']], function ($router){
    $router->resource('/course', CourseController::class)->except('show');
});

