<?php

use Illuminate\Database\Seeder;
use App\Alumno;
class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 20 ; $i++) 
    	{ 
    		Alumno::create([
    		'boleta'=>"20116303".$i,
            'escuela_id'=>1,
    		'nombre'=>str_random(10),
    		'appat'=>str_random(10),
    		'apmat'=>str_random(10),
    		'email'=>str_random(10)."@some.com",
    		'tel'=>str_random(10),
            'status'=>0,
            'token'=>1,
            'ins'=>1,
    		'fechanacimiento'=>'1990-01-01',
    			]);
    		$a= Alumno::find('20116303'.$i);
    		$a->clases()->attach(25);
    		
    	}
    }
}
