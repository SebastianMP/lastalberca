<?php

use Illuminate\Database\Seeder;
use App\Matricula;
use App\Dia;
class MaticulasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dias=  Dia::all();
        Matricula::create([
        	'nombre'=>'Matricula 1',
        	]);
        $m1= Matricula::find(1);

        $m1->dias()->attach($dias[0]);
        $m1->dias()->attach($dias[2]);
        $m1->dias()->attach($dias[3]);
        Matricula::create([
        	'nombre'=>'Matricula 2',
        	]);
        $m2= Matricula::find(2);
        $m2->dias()->attach($dias[1]);
        $m2->dias()->attach($dias[3]);
        Matricula::create([
        	'nombre'=>'Matricula 3',
        	]);
        $m3= Matricula::find(3);
        $m3->dias()->attach($dias[0]);
        $m3->dias()->attach($dias[2]);
        Matricula::create([
        	'nombre'=>'Matricula 4',
        	]);
        $m4= Matricula::find(4);
        $m4->dias()->attach($dias[5]);
        $m4->dias()->attach($dias[6]);

    }
}
