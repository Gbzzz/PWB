@extends('layouts.main')

@section('title', 'teste')

@section('content')
<h1>Alunos</h1>
<table class="table">
    <thead>
      <tr>
        <th>Nome do Aluno</th>
        <th>Data de Nascimento</th>
        <th>Nome da Mãe</th>
        <th>Nome do Pai</th>
        <th>DDD</th>
        <th>Telefone</th>
        <th>Email do Aluno</th>
        <th>Série</th>
        <th>Turno</th>
        <th>Atividade</th>
      </tr>
    </thead>
    <tbody>

@foreach($todosAlunos as $aluno)

      <tr>
        <td>{{$aluno->nome_aluno}}</td>
        <td>{{$aluno->nascimento_aluno}}</td>
        <td>{{$aluno->nome_mae}}</td>
        <td>{{$aluno->nome_pai}}</td>
        <td>{{$aluno->ddd}}</td>
        <td>{{$aluno->telefone}}</td>
        <td>{{$aluno->email_aluno}}</td>
        <td>{{$aluno->serie}}</td>
        <td>{{$aluno->turno}}</td>
        <td>{{$aluno->atividade}}</td>
    </tr>
@endforeach

<a href="{{ url('/form') }}"></a>
</tbody>
</table>
@endsection
