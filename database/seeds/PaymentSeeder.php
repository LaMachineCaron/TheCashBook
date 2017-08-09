<?php

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 */
	public function run() {
		factory(Payment::class, 2)->create();
	}
}
