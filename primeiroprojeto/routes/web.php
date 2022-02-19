<?php

use App\Http\Controllers\HomeController;
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
// rota
//:: - > metodo estático
// definindo a rota de requisição
//
Route::get('/index', [HomeController::class, 'index']); // vai importar para a HomeController:: class
// 1° definir rota
// 2° criar controller para cada entidade
