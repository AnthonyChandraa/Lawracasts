<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\CourseHeaderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

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

Route::prefix('topic')->controller(TopicController::class)->group(function () {
    Route::get('view', 'index')
        ->name('index_topic');
});

Route::prefix('forum')->controller(ForumController::class)->group(function () {
    Route::get('view', 'index')
        ->name('index_forum');
    Route::get('popular', 'index_popular')
        ->name('index_popular');
    Route::get('no-replies', 'index_no_replies')
        ->name('index_no_replies');
    Route::get('detail/{id}', 'index_detail')
        ->name('index_detail');
    Route::get('search', 'index_search')
        ->name('index_search_forum');
    Route::post('add', 'addForum')
        ->name('add_forum');
    Route::post('delete', 'deleteForum')
        ->name('delete_forum');
});

Route::prefix('comment')->controller(CommentController::class)->group(function () {
    Route::post('add', 'addComment')
        ->name('add_comment');
    Route::post('delete', 'deleteComment')
        ->name('delete_comment');
});

Route::prefix('podcast')->controller(PodcastController::class)->group(function () {
    Route::get('view', 'index')
        ->name('index_podcast');
    Route::get('play/{id}', 'index_play')
        ->name('index_play');
    Route::post('delete', 'delete_podcast')
        ->name('delete_podcast');
    Route::post('add', 'add_podcast')
        ->name('add_podcast');
    Route::get('edit/{$id}', 'index_edit_podcast')
        ->name('index_edit_podcast');
    Route::post('edit', 'edit_podcast')
        ->name('edit_podcast');
});

Route::prefix('course')->controller(CourseHeaderController::class)->group(function () {
    Route::get('view', 'index')
        ->name('index_course');
    Route::get('detail/{id}', 'index_detail')
        ->name('index_course_detail');
    Route::post('play', 'index_play')
        ->name('index_play_course');
    Route::post('add', 'add_course_header')
        ->name('add_course_header');
    Route::post('add-video', 'add_course_detail')
        ->name('add_video');
    Route::post('toggle-status', 'toggle_video_status')
        ->name('toggle_video_status');
    Route::post('delete-video', 'delete_video')
        ->name('delete_video');
    Route::post('delete-course', 'delete_course')
        ->name('delete_course');
    Route::get('viewBasedOnTopic/{id}', 'index_topic')
        ->name('index_course_topic');
});

Route::controller(UserController::class)->group(function () {
    Route::prefix('auth')->middleware('guest')->group(function () {
        Route::post('login', 'login')
            ->name('login');
        Route::post('register', 'register')
            ->name('register');
    });

    Route::prefix('profile')->middleware('auth')->group(function () {
        Route::get('view/{id}', 'index_profile')
            ->name('index_profile');
        Route::post('update', 'update_profile')
            ->name('update_profile');
        Route::post('generate', 'getToken')
            ->name('generate_token');
        Route::post('logout', 'logout')
            ->name('logout');
    });
});
