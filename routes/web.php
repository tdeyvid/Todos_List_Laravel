<?php

use \App\Http\Controllers\TodolistController;
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

/*Route::get('/', [TodolistController::class, 'index'] );
Route::get('/visualizar-tarefas', [TodolistController::class, 'show']);
Route::get('/cadastrar-tarefa', [TodolistController::class, 'create'] );
Route::post('/cadastrar-tarefa', [TodolistController::class, 'store'] );*/

Route::resource('todo', TodolistController::class);
Route::get('/', [TodolistController::class, 'bem_vindo'] );