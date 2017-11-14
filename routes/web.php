<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index');

Route::get('/student', 'StudentController@index');

Route::get('/student/create', ['uses' => 'StudentController@create', 'as' => 'student.create']);

Route::post('/student/create', ['uses' => 'StudentController@store', 'as' => 'student.store']);


