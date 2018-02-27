<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Model\Contact::class, function (Faker $faker) {
    return [
        "user_id" => function () {
            return User::all()->random();
        },
        "fullname" => $faker->name,
        "title" => $faker->title,
        "function" => $faker->jobTitle,
        "phone" => $faker->phoneNumber,
        "email" => $faker->freeEmail,
        "birthday" => $faker->date,
        "address" => $faker->address
    ];
});
