<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{	
	/* Modelos y Object-Relational mapping (ORM): Eloquent
	 * 	$table --> Define el nombre a la que el modelo hace refencia a la BD	
	 * 	$fillable --> 'asignamientos de datos en masa' (columnas 'llenables')	
	 * 	$primaryKey --> define en el modelo la llave primaria.
	 * 	$incrementing = false --> anula que la llave primaria sea un entero
	 *  autoincrementable
	 * 	$timestamp = false --> laravel por default incluye timestamps en las 
	 * 	tablas si se desea quitar esta columna, tambien se tiene que definir en 
	 *  el modelo
	 */
    protected $table 			= "Escuelas"; 
    protected $fillable			= ['idEscuela','nombre'];
    protected $primaryKey		= ['idEscuela'];
    public 	  $incrementing		= false;
    public 	  $timestamps 		= false;

    public function alumnos()
    {
    	return $this->hasMany('App\Alumno');
    }
}
