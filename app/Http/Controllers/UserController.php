<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return User The created User.
	 */
	public function store(Request $request): User
	{
		$request['password'] = '';
		Log::info('Create a user: ', $request->toArray());
		return User::create($request->toArray());
	}
}
