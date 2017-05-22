<?php

use Illuminate\Database\Seeder;
use App\Grupo;
class grupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([

        'idGrupo' 		=> 'G1',
        'tipoCurso'		=> 'Basico',
        'periodo'		=> 'Algun Periodo',
        'coach'			=> 'Profesor 1',
        'capacidad'		=> 20,
        'diasHabiles'	=> 50

        ]);

        Grupo::create([

        'idGrupo' 		=> 'G2',
        'tipoCurso'		=> 'Avanzado',
        'periodo'		=> 'Algun Periodo',
        'coach'			=> 'Profesor 2',
        'capacidad'		=> 20,
        'diasHabiles'	=> 50

        ]);
        Grupo::create([

        'idGrupo' 		=> 'G3',
        'tipoCurso'		=> 'Basico',
        'periodo'		=> 'Algun Periodo',z 
        'coach'			=> 'Profesor 3',
        'capacidad'		=> 20,
        'diasHabiles'	=> 50
        ]);

        Grupo::create([

        'idGrupo' 		=> 'G4',
        'tipoCurso'		=> 'Avanzado',
        'periodo'		=> 'Algun Periodo',
        'coach'			=> 'Profesor 4',
        'capacidad'		=> 20,
        'diasHabiles'	=> 50
        ]);
    }
}


/*
Numero variable grupos por semestre
*/