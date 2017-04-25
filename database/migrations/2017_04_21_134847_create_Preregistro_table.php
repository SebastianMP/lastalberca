<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreregistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Preregistros', function (Blueprint $table) {
            $table->string('idPreregistro');
            $table->string('alumnoMatricula');
            $table->string('convocatoria_id');
            $table->date('fechaPreregistro');

            $table->primary('idPreregistro');
            $table->foreign('alumnoMatricula')
                    ->references('matricula')
                    ->on('Alumnos');
            $table->foreign('convocatoria_id')
                    ->references('idConvocatoria')
                    ->on('Convocatorias');
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
        Schema::drop('Preregistros');
    }
}
