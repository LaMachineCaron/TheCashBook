<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillPart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
		return $this->createBillAndBillParts($request->toArray())->load('user', 'parts.user');
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
		return null;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Bill $bill
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Bill $bill) {
		return null;
	}

	/**
	 * Creates a bill, then its billParts.
	 *
	 * @param Request $requestData The data sent by the client.
	 *
	 * @return Bill The created Bill.
	 */
	private function createBillAndBillParts(array $requestData): Bill
	{
		$requestData['user_id'] = $requestData['user']['id'];
		Log::info('Create a bill: ', $requestData);
		$createdBill = Bill::create($requestData);
		foreach ($requestData['parts'] as $part) {
			$part['user_id'] = $part['user']['id'];
			$billPart = new BillPart();
			$billPart->percentage = $part['percentage'];
			$billPart->user_id = $part['user']['id'];
			$createdBill->parts()->save($billPart);
		}
		return $createdBill;
	}
}
