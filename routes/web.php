<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'login'])->name('user.login');

Route::get('/cadastro', [UserController::class, 'cadastro']);

Route::post('/cadastrar', [UserController::class, 'cadastrar']);

Route::post('/logar', [UserController::class, 'logar']);

Route::group(['middleware' => 'auth'], function () {

	Route::get('/comics', [ComicController::class, 'index'])->name('comic.show');

	Route::get('/comics/adicionar', [ComicController::class, 'adicionar']);

	Route::get('/comics/buscar', [ComicController::class, 'buscar']);

	Route::get('/comics/editar/{id}', [ComicController::class, 'editar']);

	Route::get('/comics/deletar/{id}', [ComicController::class, 'deletar']);

	Route::post('/comics/store', [ComicController::class, 'store']);

	Route::post('/comics/update/{id}', [ComicController::class, 'update']);

	Route::post('/comics/src', [ComicController::class, 'src']);

	Route::get('/logout', [UserController::class, 'logout']);

});
