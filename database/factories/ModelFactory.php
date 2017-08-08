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

use App\Models\Bill;
use App\Models\User;

$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;

	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => $password ?: $password = bcrypt('secret'),
		'remember_token' => str_random(10),
	];
});

$factory->define(Bill::class, function (Faker\Generator $faker) {
	return [
		'user_id' => User::inRandomOrder()->first()->id,
		'title' => $faker->text(rand(5, 20)),
		'totalPrice' => round($faker->randomFloat(), 2),
		'description' => $faker->text(50)
	];
});

$factory->define(Bill::class, function (Faker\Generator $faker) {
	return [
		'user_id' => User::inRandomOrder()->first()->id,
		'title' => $faker->text(rand(5, 20)),
		'totalPrice' => round($faker->randomFloat(), 2),
		'description' => $faker->text(50)
	];
});
