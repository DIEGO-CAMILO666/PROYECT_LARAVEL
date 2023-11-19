<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;


Route::get('/', function () {
    return view('todos.index');
});

Route::get('/tareas', TodosController::class . '@index')->name('todos');

Route::post('/tareas', TodosController::class . '@store');

Route::delete('/tareas/{id}', [TodosController::class , 'destroy'])->name('todos-destroy');

Route::get('/tareas/{id}', [TodosController::class , 'show'])->name('todos-edit');

Route::patch('/tareas/{id}', [TodosController::class , 'update'])->name('todos-update');

// Categories
Route::resource('categories', CategoriesController::class);