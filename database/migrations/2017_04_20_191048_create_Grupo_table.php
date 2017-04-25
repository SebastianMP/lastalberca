<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Grupos', function (Blueprint $table) {
            $table->string('idGrupo');
            $table->string('tipoCurso');
            $table->string('periodo');
            $table->integer('capacidad');
            $table->string('coach');
            $table->integer('diasHabiles');
            $table->primary('idGrupo');
            $table->timestamps();
        });
    }

    /**


    git clone proyecto
    cambiar de rama

    -m "prueba de posteo - Sebastian"
    push  origin develop
    checkout --track -b develop

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Grupos');
    }
}
