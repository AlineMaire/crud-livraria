<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivroController;

//Cadastrar
Route::get('livros/create',[LivroController::class,'create']);
Route::post('livros',[LivroController::class,'store']);

//Listar
Route::get('livros/{livro}', [LivroController::class,'show']);

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
