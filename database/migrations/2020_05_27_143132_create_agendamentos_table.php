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
            $table->integer('id_funcionario');
            $table->integer('id_funcionario_acompanhante');
            $table->string('categoriaAcompanhante');
            $table->string('agendarCom');
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
