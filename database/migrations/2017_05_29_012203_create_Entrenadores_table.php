<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Entrenadores', function (Blueprint $table) {
            $table->increments('idEntrenador');
            $table->string('nombre');
            $table->string('appat');
            $table->string('apmat');
            $table->string('clave'); /* Este campo, (revisar documento de matriculas)
             , Es una clave que tiene el profesor Arturo para identificar a los profesores, pero como no  se ha obtenido la información de como se formulo este campo, no se decidio no usar como llave primaria; para furturo seguimiento del proyecto se recomiendo usar  esta clave una vez que se obtenga el la información de como se formula.

            */
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
        Schema::drop('Entrenadores');
    }
}
