<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        //
        'CPF'=> $faker->numerify('###########'),
        'email'=> $faker->email(),
        'password'=> Hash::make('senha')

    ];
});
