<?php

use Illuminate\Database\Seeder;
use App\Entrenador;
use App\Matricula;
use App\Dia;
use App\Clase;
class ClasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coach= Entrenador::all();
        $mat= Matricula::all();
        //primera Clase ->Matricula1
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'9:00',
            	'hfin'=>'10:00',
           		'entrenador_id'=>1,
 				'matricula_id'=>1,
        	]);
        //segunda Clase ->Matricula1
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'9:00',
            	'hfin'=>'10:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
        //tercera Clase ->Matricula1
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'10:00',
            	'hfin'=>'11:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
        //cuarta clase ->matricula 1
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'11:00',
            	'hfin'=>'12:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
        //quinta clase
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'12:00',
            	'hfin'=>'13:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
        //sexta clase
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'13:00',
            	'hfin'=>'14:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:00',
            	'hfin'=>'15:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:00',
            	'hfin'=>'15:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:00',
            	'hfin'=>'15:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:00',
            	'hfin'=>'15:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'16:00',
            	'hfin'=>'17:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'17:00',
            	'hfin'=>'18:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>1,
        	]);
         //----------------------------------
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'9:00',
            	'hfin'=>'10:00',
           		'entrenador_id'=>1,
 				'matricula_id'=>2,
        	]);
        //segunda Clase ->Matricula1
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'9:00',
            	'hfin'=>'10:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
        //tercera Clase ->Matricula1
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'10:00',
            	'hfin'=>'11:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
        //cuarta clase ->matricula 1
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'11:00',
            	'hfin'=>'12:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
        //quinta clase
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'12:00',
            	'hfin'=>'13:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
        //sexta clase
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'13:00',
            	'hfin'=>'14:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:00',
            	'hfin'=>'15:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:00',
            	'hfin'=>'15:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:00',
            	'hfin'=>'15:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:00',
            	'hfin'=>'15:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'16:00',
            	'hfin'=>'17:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'17:00',
            	'hfin'=>'18:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>2,
        	]);
         //------------------matricula 3

           Clase::create([
                'lugares'=>20,
        		'hinicio'=>'11:00',
            	'hfin'=>'12:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>3,
        	]);
         //----------------matricula 4

            Clase::create([

    'lugares'=>20,
        		'hinicio'=>'9:30',
            	'hfin'=>'10:30',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>4,
        	]);
        Clase::create([
                'lugares'=>20,
        		'hinicio'=>'10:30',
            	'hfin'=>'11:30',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>4,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'11:30',
            	'hfin'=>'12:30',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>4,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'13:30',
            	'hfin'=>'14:30',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>4,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'13:00',
            	'hfin'=>'14:00',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>4,
        	]);
         Clase::create([
                'lugares'=>20,
        		'hinicio'=>'14:30',
            	'hfin'=>'15:30',
           		'entrenador_id'=>rand(1,7),
 				'matricula_id'=>4,
        	]);
    }
}
