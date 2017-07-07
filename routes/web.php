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


header("Access-Control-Allow-Origin: http://localhost:4200");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods:POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:Content-Type, X-Auth-Token, Origin, Authorization, x-xsrf-token','X-Requested-With');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', 'UserController');

//Route::post('users', 'Auth\RegisterController@create');
