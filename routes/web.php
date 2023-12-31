<?php

use App\Http\Controllers\todoController;
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

//Route::get('todos', 'TodoController@index');
//Route::get('todos/create', 'TodoController@create');
//Route::post('todos', 'TodoController@store');
//Route::get('todos/{id}', 'TodoController@show');
//Route::get('todos/{id}/edit', 'TodoController@edit');
//Route::put('todos/{id}', 'TodoController@update');
//Route::delete('todos/{id}', 'TodoController@destroy');

Route::get('/todos', [todoController::class, 'index']);
Route::get('/todos/create', [todoController::class, 'create']);
Route::post('/todos', [todoController::class, 'store']);
Route::get('/todos/{id}', [todoController::class, 'show']);
Route::get('/todos/{id}/edit', [todoController::class, 'edit']);
Route::put('/todos/{id}', [todoController::class, 'update']);
Route::delete('/todos/{id}', [todoController::class, 'destroy']);