<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivroController;

//Cadastrar
Route::get('livros/create',[LivroController::class,'create']);
Route::post('livros',[LivroController::class,'store']);

//Listar
Route::get('livros/{livro}', [LivroController::class,'show']);

//editar livro cadastrado
Route::get('livros/{livro}/edit', [LivroController::class,'edit']);
Route::post('livros/{livro}', [LivroController::class,'update']);