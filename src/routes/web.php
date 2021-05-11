<?php

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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [App\Http\Controllers\TodoController::class, 'index'])->name('home');
Route::get('/todo', function () {
    return view('todo');
})->name('add');
Route::post('/todo', [App\Http\Controllers\TodoController::class, 'store']);

Route::delete('delete/{todo}', [App\Http\Controllers\TodoController::class, 'destroy']);
Route::get('/edit/{todo}', [App\Http\Controllers\TodoController::class, 'edit'])->name('edit');
Route::put('/edit/{todo}', [App\Http\Controllers\TodoController::class, 'update'])->name('update');
