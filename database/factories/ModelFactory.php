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
use App\Models\BillBook;
use App\Models\BillPart;
use App\Models\Payment;
use App\Models\User;

$factory->define(User::class, function (Faker\Generator $faker) {
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
		'totalPrice' => $faker->randomFloat(2, 0, 50),
		'description' => $faker->text(50)
	];
});

$factory->define(BillPart::class, function () {
	return [
		'percentage' => 0.5
	];
});

$factory->define(Payment::class, function (Faker\Generator $faker) {
	return [
		'userFrom' => User::inRandomOrder()->first()->id,
		'userTo' => User::inRandomOrder()->first()->id,
		'amount' => $faker->numberBetween(0, 1000)
	];
});

$factory->define(BillBook::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->text(20)
	];
});
