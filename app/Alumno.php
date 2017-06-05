<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table 		= "Alumnos";
    protected $primaryKey	= "boleta";
    public $incrementing	= false;
    protected $fillable		= [
    							'boleta',
                                'escuela_id',
    							'nombre',
    							'appat',
    							'apmat',
    							'email',
    							'tel',
                                'status',
                                'token',
                                'ins',
    							'fechanacimiento',];


    public function escuela()
    {
         return $this->belongsTo('App\Escuela','idEscuela');
    }
    public function clases()
    {
      return $this->belongsToMany('App\Clase','Alumnos_Clases','alumno_id','clase_id');
                     
    }
}
