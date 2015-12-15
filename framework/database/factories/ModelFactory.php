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
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'date_birth' => $faker->date('d.m.Y'),
        'telephone' => $faker->phoneNumber,
        'address' => $faker->address,
        'nationality' => $faker->countryCode,
        'work_permit' => str_random(1),
        'driver_permit' => 'yes',
    ];
});

$factory->define(App\Template::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'type' => str_random(10),
        'css' => str_random(32),
        'style' => str_random(),
    ];
});

$factory->define(App\Cv::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'creation_date' => $faker->date('d.m.Y'),
    ];
});

$factory->define(App\Section::class, function (Faker\Generator $faker) {
    return [
        'type' => 'the type',
    ];
});

$factory->define(App\Skill::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => str_random(10),
        'level' => str_random(5),
    ];
});

$factory->define(App\Hobby::class, function (Faker\Generator $faker) {
    return [
        'text' => $faker->text(),
    ];
});

$factory->define(App\Work::class, function (Faker\Generator $faker) {
    return [
        'start_date' => $faker->date('d.m.Y'),
        'end_date' => $faker->date('d.m.Y'),
        'name' => $faker->name,
        'location' => $faker->address,
        'description' => $faker->text(),
    ];
});

$factory->define(App\Language::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->languageCode,
        'level' => $faker->numberBetween(0,6),
        'creditation' => $faker->text(10),
    ];
});

$factory->define(App\Education::class, function (Faker\Generator $faker) {
    return [
        'start_date' => $faker->date('d.m.Y'),
        'end_date' => $faker->date('d.m.Y'),
        'name' => $faker->name,
        'location' => $faker->address,
        'description' => $faker->text(),
        'title' => $faker->text(10),
    ];
});
