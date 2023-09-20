<?php

use App\Http\Controllers\renanController;
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



//Route::get('/renan', [renanController::class, 'index']);

Route::get('/renan/criar', [renanController::class, 'create']);

Route::post('/renan/salvar', [renanController::class, 'store']);
 
