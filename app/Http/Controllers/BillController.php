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
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		return Bill::create($request->toArray());
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
