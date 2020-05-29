<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFuncionario');
            $table->string('cpfFuncionario');
            $table->string('nomeAcompanhante');
            $table->string('categoriaAcompanhante');
            $table->date('dataAgendamento');
            $table->time('horaAgendamento');
            $table->string('agendadoPor');
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
        Schema::dropIfExists('agendamentos');
    }
}
