<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preregistro extends Model
{
	protected $table 		= 'Preregistros';
	protected $primaryKey	= 'idPreregistro';
	protected $fillable		= [	'idPreregistro', 
								'alumnoMatricula',
								'convocatoria_id',
								'fechaPreregistro' ];
}
