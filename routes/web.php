<?php

use App\Http\Controllers\ArticleController;
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

//Route Article
Route::get('/article',[ArticleController::class, 'index'] );
Route::post('/articles', [ArticleController::class, 'store']);

//Methode pour récupérer un seul article
Route::get('/articles/{article}', [ArticleController::class, 'show']);

Route::get('/articles/{article}/edit', [ArticleController::class, 'showEdit']);
