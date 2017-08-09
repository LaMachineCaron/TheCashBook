<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Bill[]|\Illuminate\Database\Eloquent\Collection
	 */
	public function index() {
		return Bill::with('user', 'parts.user')->get();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return string The created bill.
	 */
	public function store(Request $request) {
		$bill = $request->toArray();
		$bill['user_id'] = $bill['user']['id'];
		Log::info('Create a bill: ', $bill);
		return Bill::create($bill)->load('user');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  Bill                     $bill
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Bill $bill) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Bill $bill
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Bill $bill) {
		//
	}
}
