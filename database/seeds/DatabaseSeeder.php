<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$this->call(UserSeeder::class);
		//$this->call(BillBookSeeder::class);
		//$this->call(BillSeeder::class);
		//$this->call(BillPartSeeder::class);
		//$this->call(PaymentSeeder::class);
	}
}
