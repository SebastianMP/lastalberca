<?php

use Illuminate\Database\Seeder;
use App\Escuela;
class EscuelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escuela::create([
        	'nombre'=>'Escuela Superior de Cómputo',
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Superior de Físico Matemáticas'
        	]);
        Escuela::create([
        	'nombre'=> 'Escuela Superior de Ingenieria Mecánica y Eléctrica'
        	]);
        Escuela::create([
        	'nombre'=> 'Escuela Superior de Ingenieria y Arquitectura'
        	]);
        Escuela::create([
        	'nombre'=>'Unidad Profesional Interdiciplinaria de Biotecnologia'
        	]);
        Escuela::create([
        	'nombre'=>'Unidad Profesional Interdiciplinaria de Ingeniria y Ciencias Sociales Administrativas'
        	]);
        Escuela::create([
        	'nombre'=>'Unidad Profesional Interdisciplinaria de Ingeniría y Tecnologías Avanzadas'
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Superior de Ingeniería Textil'
        	]);
        Escuela::create([
        	'nombre'=>'Centro Interdisciplinario de Ciencias de la Salud'
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Nacional de Medicina y Homeopatía'
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Superior de Enfermería y Obstetricia'
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Superior de Medicina'
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Nacional de Ciencias Biológicas'
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Superior de Comercio y Administración'
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Superior de Economía'
        	]);
        Escuela::create([
        	'nombre'=>'Escuela Superior de Turismo'
        	]);


    }
}
