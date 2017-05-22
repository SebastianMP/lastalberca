<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = "Escuelas";
    protected $fillable= ['idEscuela','nombre'];
    protected $primaryKeyd=['idEscuela'];
}
