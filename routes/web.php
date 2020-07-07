<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\TaskController;
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

Route::get('/', 'TaskController@index')->name('tasks');
Route::get('create', 'TaskController@create');
Route::post('create', 'TaskController@store');
Route::get('edit/{id}', 'TaskController@edit');
Route::post('edit/{id}','TaskController@update');
Route::delete('edit/{id}', 'TaskController@destroy');
Route::get('delete', 'TaskController@deleteTask');

Route::post('/', 'HomeController@post');

Route::post('features/create', 'FeatureController@store');
Route::delete('features/delete/{id}', 'FeatureController@destroy');
Route::get('features/edit/{id}', 'FeatureController@edit');
Route::post('features/edit/{id}', 'FeatureController@update');
