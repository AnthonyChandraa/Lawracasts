<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\apicontroller;

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

Route::get('/forums', [apicontroller::class, 'get_forum'])->middleware('auth:api');
Route::get('/forums-date/{date}', [apicontroller::class, 'get_forum_based_on_date'])->middleware('auth:api');
Route::get('/forums-topic/{topic}', [apicontroller::class, 'get_forum_based_on_topic'])->middleware('auth:api');
