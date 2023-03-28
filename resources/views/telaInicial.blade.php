@extends('layouts.welcome')

@section('title', 'Tela Inicial')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="{{ url('/validarLogin') }}" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                @csrf
                <span class="login100-form-title">
                    Boas Vindas !
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Por favor, digite um usuário">
                    <input class="input100" type="text" name="usuario" placeholder="Usuário">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Por favor, digite sua senha">
                    <input class="input100" type="password" name="senha" placeholder="Senha">
                    <span class="focus-input100"></span>
                </div>

                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        Esqueceu
                    </span>

                    <a href="{{ url('/trocarSenha') }}" class="txt2">
                        Usuário / Senha?
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
                    <span class="txt1 p-b-9">
                        Você não tem uma conta?
                    </span>

                    <a href="{{ url('/criarConta') }}" class="txt3">
                        Crie uma
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
@endsection

