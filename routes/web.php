<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

// Routes accessibles si l'utilisateur n'est pas connecté
Route::middleware('guest')->group(function(){
  // Route Register
  Route::get('/register', [UserController::class, 'showForm'])->name('registration');
  //Route pour enregistrer un user dans la base de donnees
  Route::post('/register', [UserController::class, 'saveUser'])->name('registration');

  //Route pour afficher le formulaire de connexion de l'utilisateur
  Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');

  //Route pour connecter un utilisateur
  Route::post('/login', [UserController::class, 'login'])->name('login');
});

// Routes accessibles si l'utilisateur est connecté
Route::middleware(['auth'])->group(function(){
  //Route de la session de l'utilisateur
  Route::get('home', [UserController::class, 'dashboard'])->name('dashboard');

  //Routes Article
  Route::prefix('articles')->group(function(){
    //Route pour afficher tous les articles de la base de données
    Route::get('/',[ArticleController::class, 'index'] )->name('articles.all')->withoutMiddleware('auth');
    //Route pour enregistrer un article dans la base de données
    Route::post('/', [ArticleController::class, 'store'])->name('articles.save');
    //Route pour récupérer un seul article
    Route::get('/{article}', [ArticleController::class, 'show'])->name('articles.single')->withoutMiddleware('auth');
    //Route pour affhicher dans le formulaire l'article recuperé
    Route::get('/{article}/edit', [ArticleController::class, 'showEdit'])->name('articles.showEdit');
    // Route pour modifier un article
    Route::put('/{article}/update', [ArticleController::class, 'update'])->name('articles.edit');
    //Route pour supprimer un article dans la base de données 
    Route::delete('/{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');
  });
});




