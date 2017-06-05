<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|  alexandriav1.jl.serv.net.mx
|
*/
use App\Grupo;
use App\Convocatoria;
use App\Dia;
use App\Matricula;
use App\Alumno;
use App\Escuela;
Route::get('/', function () {
    return view('index');
});

//Rutas de pantalla de bienvenida y pre tramites.

Route::get('info','PortalController@option');
//---------------------------------------------->
//Rutas de inscripcion -->	begin
Route::get('preregistro', 'PRegController@create');
Route::post('preregistro','PregController@store');
Route::get('grupos','PRegController@index');
Route::post('altagrupo', 'PRegController@altag');
Route::post('comprobar','PRegController@verify');
Route::get('final','PregController@thefinal');
Route::get('getpdf','PregController@getpdf');
//Rutas de inscripcion -->	end

//Rutas de Registro -->begin
Route::post('registro','RegController@verifyId');
//Rutas de Registro -->end
Route::get('vue', function(){
	return view('vue');

});

Route::get('other', function(){
	return view('main');
});
Route::get('escuela', function(){
	$alumno= Alumno::find('2011630209');
	$escuela= Escuela::find(1);
	dd($escuela->alumnos);
	echo $alumno;
	echo "<br><br>";

});