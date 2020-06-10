<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcompanhamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acompanhamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_funcionario');
            $table->integer('id_agendamentos');
            $table->integer('id_funcionario_acompanhante');
            $table->boolean('houveContato');
            $table->json('sintomas');
            $table->string('contatoComInfectado');
            $table->string('apresentaPiora');
            $table->boolean('orientadoAoPA');
            $table->string('proximoPasso');
            $table->string('codigoCID');
            $table->string('outrasInformacoes');
            $table->string('estaAfastado');
            $table->string('inicioAfastamento');
            $table->integer('duracaoAfastamento');
            $table->boolean('necessitaAfastamento');
            $table->boolean('necessitaAcompanhamento');
            $table->string('motivoFimAcompanhamento');
            $table->boolean('desejaAgendar');
            $table->date('dataReavaliacao');
            $table->date('horaReavaliacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acompanhamentos');
    }
}
