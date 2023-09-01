<?php

use modules\LMS\Admin\Http\Controllers\AdminController;



Route::group(['namespace' => 'LMS\Admin', 'middleware' => ['web', 'auth']], function ($router){
    $router->get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
