<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Grupo;

Route::get('/', function () {
    return view('index');
});

Route::get('preregistro', 'PRegController@create');
Route::post('preregistro','PregController@store');

Route::get('inscripcion', function(){
	return view('inscripcion');
});

Route::get('grupos','PRegController@index');
Route::post('altagrupo', 'PRegController@altag');
