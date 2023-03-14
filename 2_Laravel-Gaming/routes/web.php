<?php

use App\Http\Controllers\JuegoController;
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


Route::get('/',[JuegoController::class, 'showGames'])->name('allGames');
Route::post('/',[JuegoController::class, 'addGame'])->name('addGame');
Route::get('gameDelete/{id}',[JuegoController::class,'deleteGame'])->name('deleteGame');
Route::get('/filter',[JuegoController::class,'gameFilter'])->name('gameFilter');
