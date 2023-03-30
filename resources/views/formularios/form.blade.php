    @extends('layouts.main')

    @section('title', 'Formulário')

    @section('content')

    <h1>Escola Virtual</h1>
    <h2>Formulário de Pré-Matrícula</h2>

        <form action="{{ url('/validar') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th><h3>Dados Pessoais:</h3></th>
                </tr>
                <tr>
                    <td class="title"><label>Nome do Aluno: </label></td>
                    <td class="input"><input type="text" name="nome_aluno" value="{{ old('nome_aluno') }}" class="@error('nome_aluno') is-invalid @enderror"></td>
                    <td class="error">
                        @error('nome_aluno')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </td>
                <tr>
                    <td class="title"><label>Nascimento:</label></td>
                    <td class="input"><input type="date" name="nascimento_aluno" value="{{ old('nascimento_aluno') }}" class="@error('nascimento_aluno') is-invalid @enderror"></td>
                    <td class="error">
                        @error('nascimento_aluno')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="title"><label>Nome da Mãe:</label></td>
                    <td class="input"><input type="text" name="nome_mae" value="{{ old('nome_mae') }}" class="@error('nome_mae') is-invalid @enderror" class="inputs"> <br></td>
                    <td class="error">
                        @error('nome_mae')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="title"><label>Nome do pai:</label></td>
                    <td class="input"><input type="text" name="nome_pai" value="{{ old('nome_pai') }}" class="@error('nome_pai') is-invalid @enderror"></td>
                    <td class="error">
                        @error('nome_pai')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="title"><label>Telefone:</label> <input type="text" name="ddd" id="ddd" maxlength="2" value="{{ old('ddd') }}" class="@error('ddd') is-invalid @enderror"></td>
                    <td class="input"><input type="tel" name="telefone" maxlength="10" value="{{ old('telefone') }}" class="@error('telefone') is-invalid @enderror"> <small>Formato: 9XXXX-XXXX</small></td>
                    <td class="error">
                        @error('ddd')
                        <label class="error">{{ $message }}</label>
                        @enderror
                        <br>
                        @error('telefone')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="title"><label>E-mail:</label></td>
                    <td class="input"><input type="text" name="email_aluno" value="{{ old('email_aluno') }}" class="@error('email_aluno') is-invalid @enderror"></td>
                    <td class="error">
                        @error('email_aluno')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <th><h3>Informações de Matrícula:</h3></th>
                </tr>
                <tr>
                    <td>
                        <div id="dadosMatricula">
                            <div id="serie">
                                Série: <br>
                                <select name="serie" style="width:80%;">
                                    <option value="fundamental" required>Ensino Fundamental</option>
                                    <option value="medio">Ensino Médio</option>
                                </select>
                            </div>
                    </td>
                    <td>
                        <div id="serie">
                            Turno: <br>
                            <input type="radio" name="turno" value="manha">Manhã <br>
                            <input type="radio" name="turno" value="tarde">Tarde
                        </div>
                    </td>
                    <td>
                        <div id="atividadesExtra">
                            Atividades Extracurriculares: <br>
                            <input type="checkbox" class="check" name="atividade[]" value="informatica">Informática <br>
                            <input type="checkbox" class="check" name="atividade[]" value="musica">Música <br>
                            <input type="checkbox" class="check" name="atividade[]" value="balet">Balet <br>
                            <input type="checkbox" class="check" name="atividade[]" value="pintura">Pintura <br>
                            <input type="checkbox" class="check" name="atividade[]" value="judo">Judô <br>
                            <input type="checkbox" class="check" name="atividade[]" value="futebol">Futebol <br>
                        </div>
                    </td>
                </tr>
            </table>
            <div id="botoes">
            <button type="submit" class="button-enviar">Enviar Formulário</button>
            <button href="{{ url('/') }}" type="reset" class="button-limpar">Limpar Campos</button>
            </div>
        </form>

    <script>

    var campos = document.querySelectorAll(".check");
    var limite = 3;
    for (var i = 0; i < campos.length; i++)
    campos[i].onclick = limiteEscolhas;

    function limiteEscolhas(event){
    var escolhidos = document.querySelectorAll(".check:checked");
    if (escolhidos.length >= limite + 1)
        return false;
    }
    </script>

    @endsection
