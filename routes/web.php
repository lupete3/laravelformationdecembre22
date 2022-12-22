<?php

use App\Http\Controllers\RouteController;
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

Route::get('/test', function(){
    echo "Je suis une page de test";
});

Route::get('/accueil/{name}',[RouteController::class, 'accueil'] );

Route::get('/form',[RouteController::class, 'afficher'] );
Route::post('/form',[RouteController::class, 'formValidate'] );
