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

// General
Route::get('/', 'GeneralController@home');

Route::get('/jobs', 'JobController@list');

Route::get('/jobs/{url}', 'JobController@show');

Route::get('/jobs', 'JobController@Id');