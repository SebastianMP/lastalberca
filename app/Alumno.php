<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table 		= "Alumnos";
    protected $primaryKey	= "matricula";
    public $incrementing	= false;
    protected $fillable		= ['grupo_idgrupo',
    							'matricula',
    							'boleta',
    							'cp',
    							'nombres',
    							'appat',
    							'apmat',
    							'direccion',
    							'email',
    							'celular',
    							'tel_fijo',
    							'estatura',
    							'peso',
    							'tiposangre',
    							'fechanacimiento',
    							'escuela',
    							'semestre',
    							'id_grupo'];
}
