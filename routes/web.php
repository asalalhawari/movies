<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('movies', MoviesController::class);

Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MoviesController::class, 'create'])->name('movies.create');
Route::post('/movies', [MoviesController::class, 'store'])->name('movies.store');
Route::get('/movies/{movie}/edit', [MoviesController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movie}', [MoviesController::class, 'update'])->name('movies.update');
Route::delete('/movies/{movie}', [MoviesController::class, 'destroy'])->name('movies.destroy');