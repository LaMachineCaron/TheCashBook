<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Log;

/**
 * Controller for the user model.
 */
class UserController extends Controller
{
	/**
	 * @return string An array of all users.
	 */
	public function getAll(): string {
		Log::info('Fetches all users');
		return User::all()->toJson();
	}
}
