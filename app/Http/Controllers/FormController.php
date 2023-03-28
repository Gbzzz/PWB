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
            $aluno = new Alunos();
            $aluno->create($request->all());
            $todosAlunos = Alunos::get();
            return view('formularios.alunosCadastrados', compact('todosAlunos'));
        };
    }

}
