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

Route::get('/', 'TasksController@index');


Route::get('/tasks/create', 'TasksController@create');


Route::post('/tasks', 'TasksController@store');


Route::get('/tasks/edit/{task}', 'TasksController@edit');


Route::post('/tasks/edit/{id}', 'TasksController@update');


Route::get('/tasks/delete/{task}', 'TasksController@delete');


Route::get('/tasks/{task}', 'TasksController@show');







// Route::get('/tasks/{id}', 'TasksController@show');