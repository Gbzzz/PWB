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
// Rotas da Parte de Login e Cadastro
Route::get('/', [LoginController::class, 'index']);

Route::get('/criarConta', [LoginController::class, 'criarConta']);

Route::post('/validarCadastro', [LoginController::class, 'store']);

Route::post('/validarLogin', [LoginController::class, 'login']);

Route::get('/trocarSenha', [LoginController::class, 'trocarSenha']);


// Rotas da parte do Formulário
Route::get('/form', [FormController::class, 'index']);

Route::post('/validar', [FormController::class, 'validar']);

Route::get('/alunosCAD', [FormController::class, 'list']);
