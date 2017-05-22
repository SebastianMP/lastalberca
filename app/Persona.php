<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "Personas";
    protected $fillable= ['idPersona','nombre','primerap','segundoap','nacimiento'];
   	protected $primaryKey = "idPersona";
}