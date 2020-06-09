<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triagens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_funcionario');
            $table->string('contatoComInfectado');
            $table->string('fezTeste');
            $table->boolean('senteSintomas');
            $table->json('sintomas');
            $table->boolean('possuiAtestado');
            $table->date('inicioAtestado');
            $table->integer('duracaoAtestado');
            $table->boolean('trabalhaExterno');
            $table->string('outrosLocaisTrabalho');
            $table->string('outrasInformacoes');
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
        Schema::dropIfExists('triagens');
    }
}