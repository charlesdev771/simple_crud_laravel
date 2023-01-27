<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Candidato;
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


Route::post('/cadastrar-candidatos', function (Request $infomacoes){


    Candidato::create([
        'nome' => $infomacoes->nome,
        'telefone' => $infomacoes->telefone,
    ]);

    //dd($infomacoes->all());

    echo "Success!";


});

Route::get('/mostrar', function()
{
    $consulta = Candidato::get();
    return view("ver", compact('consulta'));
});


Route::get('/mostrar-candidato/{id_do_candidato}', function($id_do_candidato)
{
    $consulta = Candidato::findOrFail($id_do_candidato);
    echo $consulta->nome;
    echo "<hr>";
    echo $consulta->telefone;
});

Route::get('/editar-candidato/{id_do_candidato}', function($id_do_candidato)
{
    $consulta = Candidato::findOrFail($id_do_candidato);
    return view('editar', ['candidato' => $consulta]);
});


Route::put('/atualizar-candidato/{id_do_candidato}', function (Request $informacões, $id_do_candidato){
    $consulta = Candidato::findOrFail($id_do_candidato);
    $consulta->nome = $informacões->nome;
    $consulta->telefone = $informacões->telefone;
    $consulta->save();
    echo "att";
});

Route::get('/excluir-candidato/{id_do_candidato}', function ($id_do_candidato){
    $consulta = Candidato::findOrFail($id_do_candidato);
    $consulta->delete();
    echo "deleted!";
});

