<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class alunos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_aluno',
        'nascimento_aluno',
        'nome_mae',
        'nome_pai',
        'ddd',
        'telefone',
        'email_aluno',
        'serie',
        'turno',
        'atividade',
    ];
}
