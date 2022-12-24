<?php

use App\Http\Controllers\ArticleController;
use App\Http\Requests\ArticleRequest;
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

//Route pour récupérer un seul article
Route::get('/articles/{article}', [ArticleController::class, 'show']);
//Route pour affhicher dans le formulaire l'article recuperé
Route::get('/articles/{article}/edit', [ArticleController::class, 'showEdit']);
// Route pour modifier un article
Route::put('/articles/{article}/update', [ArticleController::class, 'update']);
//Route pour supprimer un article dans la base de données 
Route::delete('/articles/{article}/delete', [ArticleController::class, 'delete']);

