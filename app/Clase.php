<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table= "Clases";//->tabla en base de datos
    protected $fillable= ['hinicio',  //->campos llenables
            			  'hfin',
            			  'lugares',
           				  'entrenador_id',
 						  'matricula_id',];
   protected $primaryKey= "idClase";// -> referencia llave primaria

   // -> Relaciones con otros modelos
 	public function matricula()
 	{
 		return $this->belongs('App\Matricula');
 		
 	}
 	// ->relaciones con los modelos
 	public function alumnos()
 	{
 		 return $this->belongsToMany('App\Alumno','Alumnos_Clases','clase_id','alumno_id');
 	}
}
