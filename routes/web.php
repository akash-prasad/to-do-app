<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'TaskController@index')
    ->name('home');
Route::post('/task/create', 'TaskController@create')
    ->name('createTask');
Route::post('/task/{id}/edit', 'TaskController@edit')
    ->name('updateTask');
Route::get('/task/{id}/delete', 'TaskController@delete')
    ->name('deleteTask');
