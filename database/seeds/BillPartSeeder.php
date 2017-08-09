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
			factory(BillPart::class, rand(1,1))->create(['bill_id' => $bill->id]);
		}
	}
}
