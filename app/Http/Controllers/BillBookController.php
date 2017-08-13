<?php

namespace App\Http\Controllers;

use App\Models\BillBook;

class BillBookController extends Controller
{
	/**
	 * @return array The list of all billBooks with their bills and their payments.
	 */
	public function getAll(): array
	{
		return BillBook::with('bills.parts.user', 'bills.user', 'payments.uTo', 'payments.uFrom')
			->get()->toArray();
	}
}
