<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table 		= "Grupos";
    protected $primaryKey	="idGrupo";
    protected $fillable 	=['idGrupo',
    						  'idcoach',
    						  'tipoCurso', 
    						  'capacidad' ];
}

