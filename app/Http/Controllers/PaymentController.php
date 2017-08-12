<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
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
}
