<?php

use App\Models\Bill;
use App\Models\BillPart;
use Illuminate\Database\Seeder;

class BillPartSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		foreach(Bill::all() as $bill) {
			BillPart::create(['bill_id' => $bill->id, 'user_id' => 1, 'percentage' => 0.5]);
			BillPart::create(['bill_id' => $bill->id, 'user_id' => 2, 'percentage' => 0.5]);
		}
	}
}
