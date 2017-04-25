<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Convocatorias', function (Blueprint $table) {
            $table->string('idConvocatoria');
            $table->date('fechaApertura');
            $table->date('fechaCierre');
            $table->string('periodo');
            $table->date('fechaEntrega');
            $table->date('fechaPublicacion');
            $table->primary('idConvocatoria');
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
