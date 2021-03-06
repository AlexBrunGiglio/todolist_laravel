<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\Task as TaskResource;
use App\Task;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('features/{id}', 'FeatureController@checkboxState');
Route::get('/task', 'TaskController@api');
Route::put('edit/{id}', 'TaskController@updateApi');
Route::delete('delete/{id}', 'TaskController@destroyApi');