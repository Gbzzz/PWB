<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Http\Requests\ValidarForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(){
        return view('formularios.form');
    }

    public function validar(ValidarForm $request){
        if($request->validated() == true){
            $aluno = new alunos;
            $aluno->nome_aluno = $request->nome_aluno;
            $aluno->nascimento_aluno = $request->nascimento_aluno;
            $aluno->nome_mae = $request->nome_mae;
            $aluno->nome_pai = $request->nome_pai;
            $aluno->ddd = $request->ddd;
            $aluno->telefone = $request->telefone;
            $aluno->email_aluno = $request->email_aluno;
            $aluno->serie = $request->serie;
            $aluno->turno = $request->turno;
            if (!empty($request->atividade) && is_array($request->atividade)) {
                $atividade = implode(',', $request->atividade);
            } else {
                $atividade = '';
            }
            $aluno->atividades = $atividade;
            $aluno->save();
            $todosAlunos = alunos::get();
            return view('formularios.alunosCadastrados', compact('todosAlunos'));
        };
    }
}
