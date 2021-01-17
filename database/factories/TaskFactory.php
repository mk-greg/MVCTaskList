<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'task_name'        => $faker->name,
        'task_desc' => $faker->sentence,
    ];
});
