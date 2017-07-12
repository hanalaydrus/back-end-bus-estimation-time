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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Bus::class, function (Faker\Generator $faker) {
	$track = App\Track::pluck('id')->random();
	$type = App\Type::pluck('id')->random();

    return [
        'id' => str_random(10),
        'track_id' => $track,
        'type_id' => $type,
        'driver_name' => $faker->name,
    ];
});

$factory->define(App\Position::class, function (Faker\Generator $faker) {
	$bus_id = App\Bus::pluck('id')->random();
    return [
	    'bus_id' => $bus_id,
        'lat' => $faker->latitude(-7.0, -6.9),
        'long' => $faker->longitude(107.5, 107.6),
    ];
});
