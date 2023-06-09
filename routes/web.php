<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
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

// Rotas da parte do Formulário
Route::get('/', [FormController::class, 'index']);

Route::post('/validar', [FormController::class, 'validar']);

Route::get('/alunosCAD', [FormController::class, 'list']);
