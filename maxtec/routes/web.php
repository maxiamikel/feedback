<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MaxtecController;

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

Route::get('/', [MaxtecController::class,'index']);
Route::get('/pages/empresa', [MaxtecController::class,'about']);
Route::get('/pages/servicos', [MaxtecController::class,'servico']);
Route::get('/pages/equipe', [MaxtecController::class,'equipe']);
Route::get('/pages/projeto', [MaxtecController::class,'projeto']);
Route::get('/pages/contato', [MaxtecController::class,'contato']);