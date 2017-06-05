<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alumnos_Clases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alumno_id');//->foranea
            $table->integer('clase_id')->unsigned();//->foranea
            $table->timestamps();

            //constraints

            $table->foreign('alumno_id')
                  ->references('boleta')
                  ->on('Alumnos');
            $table->foreign('clase_id')
                  ->references('idClase')
                  ->on('Clases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Alumnos_Clases');
    }
}
