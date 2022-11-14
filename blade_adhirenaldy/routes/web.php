<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class,'movie_list']);

Route::get('/action', [MovieController::class,'action_list']);

Route::get('/horror', [MovieController::class,'horror_list']);

Route::get('/about',[MovieController::class,'profile']);
