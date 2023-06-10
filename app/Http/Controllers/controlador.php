<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class controlador extends Controller
{
    public function cadastrar(Request $infomacoes)

    {
        Candidato::create([
            'nome' => $infomacoes->nome,
            'telefone' => $infomacoes->telefone,
        ]);


        echo "Success!";
    }

    public function mostrar()
    {
        $consulta = Candidato::get();
        return view("ver", compact('consulta'));
    }

    public function mostrar_por_id($id_do_candidato)
    {
        $consulta = Candidato::findOrFail($id_do_candidato);
        echo $consulta->nome;
        echo "<hr>";
        echo $consulta->telefone;
    }

    public function editar_candidato($id_do_candidato)
    {
        $consulta = Candidato::findOrFail($id_do_candidato);
        return view('editar', ['candidato' => $consulta]);
    }

    public function atualizar_candidato(Request $infomacoes, $id_do_candidato)
    {
        $consulta = Candidato::findOrFail($id_do_candidato);
        $consulta->nome = $infomacoes->nome;
        $consulta->telefone = $infomacoes->telefone;
        $consulta->save();
        echo "att";
    }

    public function excluir_candidato($id_do_candidato)
    {
        $consulta = Candidato::findOrFail($id_do_candidato);
        $consulta->delete();
        echo "deleted!";
    }
}
