<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Alumno::class, function (Faker\Generator $faker){
return [

    		'boleta'=>str_random(10),
            'escuela_id'=>3,
    		'nombre'=>$faker->name,
    		'appat'=>str_random(10),
    		'apmat'=>str_random(10),
    		'email'=>$faker->email,
    		'tel'=>str_random(10),
            'status'=>0,
            'token'=>1,
            'ins'=>1,
    		'fechanacimiento'=>'1990-02-02'
		]

});