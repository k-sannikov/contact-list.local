<?php

use App\Model\Contact;
use Faker\Generator as Faker;

$factory->define(App\Model\Contact::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'surname' => $faker->lastName,
        'name' => $faker->firstName,
        'patronymic' => $faker->firstName,
        'organization' => $faker->catchPhrase,
        'INN' => $faker->numberBetween(100000, 900000) . $faker->numberBetween(100000, 900000),
        'department' => $faker->company,
        'position' => $faker->jobTitle,
        'phone_work' => '+7' . $faker->numberBetween(900, 999) . $faker->numberBetween(1000000, 9000000),
        'phone_mobile' => '+7' . $faker->numberBetween(900, 999) . $faker->numberBetween(1000000, 9000000),
        'email' => $faker->unique()->email,
    ];
});
