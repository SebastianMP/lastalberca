<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alumnos', function (Blueprint $table) {
            $table->string('matricula');
            $table->string('boleta');
            $table->string('nombres');
            $table->string('appat');
            $table->string('apmat');
            $table->integer('semestre');
            $table->string('direccion');
            $table->string('cp');
            $table->string('email');
            $table->string('celular');
            $table->string('tel_fijo');
            $table->float('estatura');
            $table->integer('peso');
            $table->string('tiposangre');
            $table->date('fechanacimiento');
            $table->string('escuela');

            $table->primary('matricula');

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
        Schema::drop('Alumnos');
    }
}
