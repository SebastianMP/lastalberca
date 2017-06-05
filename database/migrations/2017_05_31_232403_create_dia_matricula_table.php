<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaMatriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dia_Matricula', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dia_id')->unsigned();
            $table->integer('matricula_id')->unsigned();

            //constraints

            $table->foreign('dia_id')
                  ->references('idDia')
                  ->on('Dias');

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
        Schema::drop('Dia_Matricula');
    }
}
