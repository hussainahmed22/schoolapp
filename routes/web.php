<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
  
Route::get('/', 'App\Http\controllers\TestController@dashboard');
Route::get('/dashboard', 'App\Http\controllers\TestController@dashboard');
Route::get('/dashboard2', 'App\Http\controllers\TestController@dashboard2');
Route::get('/dashboard3', 'App\Http\controllers\TestController@dashboard3');
Route::get('/classes', 'App\Http\controllers\ClassesController@index');
Route::get('/classes/create', 'App\Http\controllers\ClassesController@create');
Route::resource('teachers', TeacherController::class);