<?php


Route::group(['namespace' => 'LMS/User/Http/Controllers', 'middleware' => 'web'], function ($router){
    Auth::routes();
});
