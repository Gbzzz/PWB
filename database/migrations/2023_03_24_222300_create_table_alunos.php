<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('nome_aluno');
            $table->String('nascimento_aluno');
            $table->String('nome_mae');
            $table->String('nome_pai');
            $table->String('ddd');
            $table->String('telefone');
            $table->String('email_aluno')->unique();
            $table->String('serie');
            $table->String('turno');
            $table->String('atividade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
