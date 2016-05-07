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
        'no_registro'             => 1,
        'no_boleta'               => 1,
        'nombre_paciente'         => $faker->name,
        'edad_paciente'           => $faker->randomDigit,
        'pueblo_paciente'         => $faker->city,
        'escolaridad_paciente'    =>'Basico',
        'ocupacion_paciente'      => $faker->word,
        'nombre_esposo'           => $faker->lastName,
        'edad_esposo'             => $faker->randomDigit,
        'pueblo_esposo'           => $faker->city,
        'escolaridad_esposo'      => $faker->word,
        'ocupacion_esposo'        => $faker->word ,
        'distancia_se_si_cercana' => $faker->randomDigit,
        'tiempo_para_llegar'      => $faker->randomDigit,
        'nombre_comunidad'        => $faker->city,
        'dpi_paciente_com_esp'    => $faker->randomDigit,
        'fecha_ultima_regla'      => $faker->dateTime,
        'fecha_probable_parto'    => $faker->dateTime,
        'no_embarazos'            => $faker->randomDigit ,
        'no_partos'               => $faker->randomDigit,
        'no_cesarias'             => $faker->randomDigit,
        'no_abortos'              => $faker->randomDigit,
        'no_hijos_vivos'          => $faker->randomDigit,
        'no_hijos_muertos'        => $faker->randomDigit,
        'user_id'                 => 1,
        'centro_id'               => 1,
        ];
});


$factory->define(App\antecedentes_obstetricos::class, function ($faker) {
    return [
            'dato1'         => $faker->randomElement([true, false]),
            'dato2'         => $faker->randomElement([true, false]),
            'dato3'         => $faker->randomElement([true, false]),
            'dato4'         => $faker->randomElement([true, false]),
            'dato5'         => $faker->randomElement([true, false]),
            'dato6'         => $faker->randomElement([true, false]),
            'dato7'         => $faker->randomElement([true, false]),
            'pacientes_id'   => rand(1,50),

        ];
});

$factory->define(App\embarazo_actual::class, function ($faker) {
    return [
            'dato1'         => $faker->randomElement([true, false]),
            'dato2'         => $faker->randomElement([true, false]),
            'dato3'         => $faker->randomElement([true, false]),
            'dato4'         => $faker->randomElement([true, false]),
            'dato5'         => $faker->randomElement([true, false]),
            'dato6'         => $faker->randomElement([true, false]),
            'dato7'         => $faker->randomElement([true, false]),
            'dato8'         => $faker->randomElement([true, false]),
            'dato9'         => $faker->randomElement([true, false]),
            'dato10'         => $faker->randomElement([true, false]),
            'dato11'         => $faker->randomElement([true, false]),
            'dato12'         => $faker->randomElement([true, false]),
            'pacientes_id'   => rand(1,50),

        ];
});

$factory->define(App\embarazo_actual::class, function ($faker) {
    return [
            'dato1'         => $faker->randomElement([true, false]),
            'dato2'         => $faker->randomElement([true, false]),
            'dato3'         => $faker->randomElement([true, false]),
            'dato4'         => $faker->randomElement([true, false]),
            'dato5'         => $faker->randomElement([true, false]),
            'dato6'         => $faker->randomElement([true, false]),
            'dato7'         => $faker->paragraph,
            'pacientes_id'   => rand(1,50),

        ];
});
