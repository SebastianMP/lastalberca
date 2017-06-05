<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table 		="Matriculas";
    protected $fillable 	= ['idMatricula', 'nombre'];
    protected $primaryKey 	= 'idMatricula';
    public 	  $timestamps	= false;


    public function clases()
    {
    	return $this->hasMany('App\Clase');
    }
    public function dias()
    {
    	return $this->belongsToMany('App\Dia','Dia_Matricula');
    }
}
