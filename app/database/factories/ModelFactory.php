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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Paciente::class, function ($faker) {
    return [
        'no_registro' => 1,
        'no_boleta' => 1,
        'nombre' => $faker->name,
        'edad' => $faker->randomDigit,
        'pueblo' => $faker->city,
        'escolaridad' =>'Basico',
        'ocupacion' => $faker->word,
        'nombre_esposo' => $faker->lastName,
        'edad_esposo' =>$faker->randomDigit,
        'pueblo_esposo' => $faker->city,
        'escolaridad_esposo' => $faker->word,
        'ocupacion_esposo' => $faker->word ,
        'distancia_se_si_cercana' => $faker->randomDigit,
        'tiempo_para_llegar' => $faker->randomDigit,
        'nombre_comunidad' => $faker->city,
        'dpi_paciente_com_esp' $faker->randomDigit,
        'fecha_ultima_regla' => $faker->dateTime,
        'fecha_probable_parto'=> $faker->dateTime,
        'no_embarazos' =>$faker->randomDigit ,
        'no_partos' =>$faker->randomDigit,
        'no_cesarias' =>$faker->randomDigit,
        'no_abortos' =>$faker->randomDigit,
        'no_hijos_vivos' =>$faker->randomDigit,
        'no_hijos_muertos' =>$faker->randomDigit,
        'user_id' => 1,
        'centro_id' =>1,

        ];
});
