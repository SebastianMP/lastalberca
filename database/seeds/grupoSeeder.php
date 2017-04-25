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
        'coach'			=> 'Acuaman',
        'capacidad'		=> 20,
        'diasHabiles'	=> 50

        ]);

        Grupo::create([

        'idGrupo' 		=> 'G2',
        'tipoCurso'		=> 'Avanzado',
        'periodo'		=> 'Algun Periodo',
        'coach'			=> 'Black Mantha',
        'capacidad'		=> 20,
        'diasHabiles'	=> 50

        ]);
        Grupo::create([

        'idGrupo' 		=> 'G3',
        'tipoCurso'		=> 'Basico',
        'periodo'		=> 'Algun Periodo',
        'coach'			=> 'Flipper',
        'capacidad'		=> 20,
        'diasHabiles'	=> 50
        ]);

        Grupo::create([

        'idGrupo' 		=> 'G4',
        'tipoCurso'		=> 'Avanzado',
        'periodo'		=> 'Algun Periodo',
        'coach'			=> 'Sirenoman',
        'capacidad'		=> 20,
        'diasHabiles'	=> 50
        ]);
    }
}
