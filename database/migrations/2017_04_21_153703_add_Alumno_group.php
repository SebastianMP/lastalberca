<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlumnoGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Alumnos', function (Blueprint $table) {
            $table->string('id_grupo')->nullable();
            $table->foreign('id_grupo')->references('idGrupo')->on('Grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Alumnos', function (Blueprint $table) {
            //
        });
    }
}
