<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/posts', [DashboardController::class, 'posts']);
Route::get('/posts/create', [PostsController::class, 'showCreatePosts']);
Route::post('/posts/create', [PostsController::class, 'store'])->name('posts.store');

Route::get('/category', [DashboardController::class, 'category']);
Route::get('/users', [DashboardController::class, 'user']);

Route::get('/chart/grafik', [ChartController::class, 'grafik']);
Route::get('/chart/covid', [ChartController::class, 'getCovid']);
Route::get('/chart/penambahan', [ChartController::class, 'covPenambahan']);

// test nilai
Route::get('/chart/prov', [ChartController::class, 'getProv']);
Route::get('/chart/kasus', [ChartController::class, 'getKasus']);


