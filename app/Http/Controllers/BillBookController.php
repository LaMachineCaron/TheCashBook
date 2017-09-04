<?php

namespace App\Http\Controllers;

use App\Models\BillBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BillBookController extends Controller
{
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return BillBook The created BillBook.
	 */
	public function store(Request $request): BillBook
	{
		Log::info('Create a billBook: ', $request->toArray());
		return BillBook::create($request->toArray())
			->load('bills.parts.user', 'bills.user', 'payments.uTo', 'payments.uFrom');
	}

	/**
	 * @return array The list of all billBooks with their bills and their payments.
	 */
	public function getAll(): array
	{
		return BillBook::with('bills.parts.user', 'bills.user', 'payments.uTo', 'payments.uFrom')
			->get()->toArray();
	}
}
