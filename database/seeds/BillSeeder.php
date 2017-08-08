<?php

use App\Models\Bill;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(Bill::class, 20)->create();
	}
}
