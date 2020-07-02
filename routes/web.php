<?php

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

Route::get('/','TaskController@index');
Route::post('/tasks','TaskController@store');
Route::delete('/tasks/{task_id}','TaskController@destroy');
Route::get('/tasks/{task_id}','TaskController@edit');
Route::put('/tasks/{task_id}','TaskController@update');
Route::put('/task/{task_id}/done','TaskController@complete');