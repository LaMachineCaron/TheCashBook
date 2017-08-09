<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
	public function getAll() {
		return Payment::with('userTo', 'userFrom')->get();
	}
}
