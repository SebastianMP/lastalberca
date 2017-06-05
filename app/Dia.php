<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dia; 

class Dia extends Model
{
    protected $table   		= 	"Dias";
    protected $primaryKey	=	'idDia';
    protected $fillable		=	['idDia','nombre'];
    public 	  $timestamps	=	false;

    public function matriculas()
    {
    	$this->belongsToMany('App\Matricula', 'Dia_Matricula', 'dia_id','matricula_id');
    }
}
