<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alumnos', function (Blueprint $table) {
            $table->string('boleta');
            $table->string('nombre');
            $table->string('appat');
            $table->string('apmat');
            $table->string('email');
            $table->string('tel');
            $table->date('fechanacimiento');
            $table->string('token');
            $table->integer('status')->unsigned();
            $table->integer('ins')->unsigned();
            $table->integer('escuela_id')->unsigned();
            $table->timestamps();


            //constraints
            $table->primary('boleta');
            $table->foreign('escuela_id')->references('idEscuela')->on('Escuelas');
        });
    }  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Alumnos');
    }
}
