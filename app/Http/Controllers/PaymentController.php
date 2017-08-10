<?php

namespace App\Http\Controllers;

use App\Models\Payment;
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
		return Payment::with('userTo', 'userFrom')->get();
	}
}
