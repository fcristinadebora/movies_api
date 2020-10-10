<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\MoviesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('upcoming', [MoviesController::class, 'upcoming'])->name('movies.upcoming');
Route::get('top-rated', [MoviesController::class, 'topRated'])->name('movies.top-rated');
Route::get('{movieId}', [MoviesController::class, 'find'])->name('movies.find');