<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Convocatorias', function (Blueprint $table) {
            $table->increments('idConvocatoria');
            $table->date('fapertura');
            $table->date('fcierre');
            $table->date('fpublicacion');
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
        Schema::drop('Convocatorias');
    }
}
