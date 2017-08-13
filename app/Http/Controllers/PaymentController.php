<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

/**
 * Controller for the payment model.
 */
class PaymentController extends Controller
{
	/**
	 * @return Payment[] The list of all payments with the user objects.
	 */
	public function getAll() {
		Log::info('Fetches all payments');
		return Payment::with('uTo', 'uFrom')->get();
	}

	/**
	 * Persists a payment in the database.
	 *
	 * @param Request $request The http request object containing the payment information
	 *
	 * @return Payment The created payment.
	 */
	public function store(Request $request): Payment
	{
		Log::info('Create a payment: ', $request->toArray());
		return Payment::create($request->toArray())->load('uFrom', 'uTo');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id The id of the bill to remove
	 *
	 * @return \Illuminate\Http\Response 200 If delete has succeeded, else 500
	 */
	public function destroy(int $id): Response
	{
		Log::info('Soft-deleting payment with id ' . $id);
		$isDeleted = Payment::findOrFail($id)->delete();
		if ($isDeleted) {
			return new Response("deleted", 200);
		}
		return new Response("Error while deleting", 500);
	}
}
