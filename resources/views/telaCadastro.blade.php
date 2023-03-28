@extends('layouts.welcome')

@section('title', 'Cadastro')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="{{ url('/validarCadastro') }}" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                @csrf
                <span class="login100-form-title">
                    Complete com seus dados!
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Por favor, digite um usuário">
                    <input class="input100"
                    type="text"
                    name="usuario"
                    value="{{ old('usuario') }}"
                    placeholder="Usuário"
                    class="@error('usuario') is-invalid @enderror"
                    required>
                    <span class="focus-input100"></span>
                </div>
                <small>
                    @error('usuario')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </small>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Por favor, digite um email">
                    <input class="input100"
                    type="email"
                    name="email_usuario"
                    value="{{ old('email_usuario') }}"
                    placeholder="E-mail" class="@error('email_usuario') is-invalid @enderror"
                    required>
                    <span class="focus-input100"></span>
                </div>
                <small>
                    @error('email_usuario')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </small>

                <div class="wrap-input100 validate-input" data-validate = "Por favor, digite sua senha">
                    <input class="input100"
                    type="password"
                    name="senha"
                    placeholder="Senha"
                    class="@error('senha') is-invalid @enderror"
                    required>
                    <span class="focus-input100"></span>
                </div>
                <small>
                    @error('senha')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </small>

                <div class="flex-col-c p-t-170 p-b-40">
                    <button class="login100-form-btn">
                        Cadastrar
                    </button>
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

