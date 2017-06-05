<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table 	= "inscripciones";
    protected $fillable	= ['idInscripcion',
    					   'alumno_id',
    					   'statusCurso',
    					   'convocatoria_id',
    					   'asistencia',
    					   'statuspersonal',
    					   'grupo_id'
    					   ];
}

/*
Una matricula tiene muchas horas de clase
	a su vez muchas  horas de clase pertenecen a una matricula
Un alumno elije una hora de clase de esas matriculas por cada convocatoria
 
 Forma representativa de la tabla, como podria representarse la eleccion de un clase y la vinculacion hacia todos los datos que conlleva un a clase
<table Grupo>
-->idclase (esta llave se propagara hacia alguna tabla relacionada a alumnos)
-->horas
-->capacidad
-->profesor_id (Esta es una llave foranea de los profesores)
-->matricula_id (llave foranea de  matricula).
</table Grupo>
<table Matricula>
-->IdMatricula
-->nombre
-->dias
</table Matricula>
*/