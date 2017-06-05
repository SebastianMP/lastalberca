<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table= "Clases";
    protected $fillable= ['hinicio',
            			  'hfin',
            			  'lugares',
           				  'entrenador_id',
 						  'matricula_id',];
   protected $primaryKey= "idClase";
 	public function matricula()
 	{
 		return $this->belongs('App\Matricula');
 		
 	}
 	public function alumnos()
 	{
 		 return $this->belongsToMany('App\Alumno','Alumnos_Clases','clase_id','alumno_id');
 	}
}
