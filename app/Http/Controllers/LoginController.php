<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarCadastro;
use App\Http\Requests\ValidarLogin;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('telaInicial');
    }

    public function criarConta(){
        return view('telaCadastro');
    }

    public function store(ValidarCadastro $request){
        if($request->validated() == true){
            $user = new User();
            $user->create($request->all());
            return view('telaInicial');
        }

    }

    public function login(ValidarLogin $request){
        if($request->validated() == true){}

    }

    public function trocarSenha(){
        return view('trocarSenha');
    }
}
