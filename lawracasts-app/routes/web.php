<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\CourseHeaderController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('topic')->controller(TopicController::class)->group(function (){
    Route::get('view', 'index')
        ->name('index_topic');
});

Route::prefix('forum')->controller(ForumController::class)->group(function (){
   Route::get('view', 'index')
       ->name('index_forum');
});

Route::prefix('podcast')->controller(PodcastController::class)->group(function (){
   Route::get('view', 'index')
       ->name('index_podcast');
});

Route::prefix('course')->controller(CourseHeaderController::class)->group(function (){
    Route::get('view', 'index')
        ->name('index_course');
});

Route::controller(UserController::class)->group(function (){
    Route::prefix('auth')->group(function (){
       Route::post('login', 'login')
           ->name('login');
       Route::post('register', 'register')
           ->name('register');
       Route::post('logout', 'logout')
           ->name('logout');
    });

    Route::prefix('profile')->group(function (){
        Route::get('view/{id}', 'index_profile')
            ->name('index_profile');
    });
});
