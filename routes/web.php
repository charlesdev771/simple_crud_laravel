<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Candidato;
use App\Http\Controllers\controlador;
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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/cadastrar-candidatos', [controlador::class, 'cadastrar']);
Route::get('/mostrar', [controlador::class, 'mostrar']);
Route::get('/mostrar-candidato/{id_do_candidato}', [controlador::class, 'mostrar_por_id']);
Route::get('/editar-candidato/{id_do_candidato}', [controlador::class, 'editar_candidato']);
Route::put('/atualizar-candidato/{id_do_candidato}', [controlador::class, 'atualizar_candidato']);
Route::get('/excluir-candidato/{id_do_candidato}', [controlador::class, 'excluir_candidato']);

