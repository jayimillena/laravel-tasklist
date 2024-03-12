<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, TaskController};

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/tasks', [HomeController::class, 'index'])->name('home.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/task/update/{task}', [TaskController::class, 'update'])->name('task.update');
Route::get('/task/{task}', [TaskController::class, 'show'])->name('task.show');
Route::delete('/task/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::put('/tasks/{task}/toggle-complete', [TaskController::class, 'toggleComplete'])->name('tasks.toggle-complete');
  