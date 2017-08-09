<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use \Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function doLogin(Request $request): JsonResponse {
	    if (Auth::attempt(['email' => $request['login'], 'password' => $request['password']])) {
	        Log::info('User logged in: ', [$request['login']]);
		    return Response::json("ok", 200);
	    }
    	return Response::json("non", 400);
    }

    public function doLogout(Request $request): JsonResponse {
	    $this->guard()->logout();
	    $request->session()->invalidate();
	    return Response::json("ok", 200);
    }
}
