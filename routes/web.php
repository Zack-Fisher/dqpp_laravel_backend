<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuessingGameController;

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

// use . syntax for accessors, unlike ror's #
Route::get('/', [GuessingGameController::class, 'index'])->name('guess.index');
Route::post('/', [GuessingGameController::class, 'makeGuess'])->name('guess.makeGuess');
