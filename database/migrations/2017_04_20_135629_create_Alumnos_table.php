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
            $table->string('escuela');
            $table->string('boleta');
            $table->string('nombres');
            $table->string('appat');
            $table->string('apmat');
            $table->string('email');
            $table->string('tel');
            $table->date('fechanacimiento');
            $table->string('clave');
            $table->integer('status');
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
