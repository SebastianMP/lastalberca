<?php

use Illuminate\Database\Seeder;
use App\Entrenador;
class EntrenadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entrenador::create([
        	'nombre'=>'Erick',
        	'appat' =>'Gonzales',
        	'apmat'	=>'Mendez'
        	]);
        Entrenador::create([
        	'nombre'=>'David',
        	'appat' =>'Jimenez',
        	'apmat'	=>'Fernandez'
        	]);
        Entrenador::create([
        	'nombre'=>'Manuel',
        	'appat' =>'Arcos',
        	'apmat'	=>'Ayala'
        	]);
        Entrenador::create([
        	'nombre'=>'Leonel',
        	'appat' =>'Alvarado',
        	'apmat'	=>'Gutierrez'
        	]);
         Entrenador::create([
        	'nombre'=>'Isaac',
        	'appat' =>'Garcia',
        	'apmat'	=>'Marquez'
        	]);
         Entrenador::create([
        	'nombre'=>'Alan',
        	'appat' =>'Ibarra',
        	'apmat'	=>'Cruz'
        	]);
         Entrenador::create([
        	'nombre'=>'Samuel',
        	'appat' =>'L',
        	'apmat'	=>'Jackson'
        	]);
    }
}
