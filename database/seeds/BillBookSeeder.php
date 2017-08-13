<?php

use App\Models\BillBook;
use Illuminate\Database\Seeder;

class BillBookSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(BillBook::class, 2)->create();
	}
}
