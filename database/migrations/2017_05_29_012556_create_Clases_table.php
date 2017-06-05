<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clases', function (Blueprint $table) {
            $table->increments('idClase');
            $table->integer('lugares')->unsigned();
            $table->time('hinicio');
            $table->time('hfin');
            $table->integer('entrenador_id')->unsigned();
            $table->integer('matricula_id')->unsigned();


            //constrains
            $table->foreign('entrenador_id')
                  ->references('idEntrenador')
                  ->on('Entrenadores');
                  
            $table->foreign('matricula_id')
                  ->references('idMatricula')
                  ->on('Matriculas');
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
        Schema::drop('Clases');
    }
}
