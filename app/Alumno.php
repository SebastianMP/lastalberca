<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table 		= "Alumnos";
    protected $primaryKey	= "matricula";
    public $incrementing	= false;
    protected $fillable		= [
                                'matricula',
    							'boleta',
                                'escuela',
    							'nombres',
    							'appat',
    							'apmat',
    							'email',
    							'tel',
                                'clave',
                                'status',
    							'fechanacimiento',];
}
