<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table 		= "Convocatorias";
    protected $primaryKey	= "idConvocatoria";
    protected $fillable		= [
    							"idConvocatoria",
    							"fechaApertura",
    							"fechaCierre",
    							"periodo",
    							"fechaEntrega",
    							"FechaPublicacion"
    							];
    public $incrementing	= false;
}