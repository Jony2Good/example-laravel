<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', [FirstController::class, 'index'])->name('first.index');
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/date', [DateController::class, 'index'])->name('date.index');
Route::get('/article', [ArticleController::class, 'index'])->name('article.index');

Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/first', [PostController::class, 'firstOrCreate']);
Route::get('/posts/restore/{id}', [PostController::class, 'restore']);


Route::get('/author', [AuthorController::class, 'create']);
