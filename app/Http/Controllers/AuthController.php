<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AccountResource;
use App\Http\Requests\RegisterRequest;
use App\Models\Account;

class AuthController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        // Return the view for the registration form.

        return view('auth.register');
    }
    /**
     * Handle the registration request.
     *
     * @param \App\Http\Requests\RegisterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        // Create a new account with the provided email and hashed password.

        $account = Account::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        // Return a JSON response with the created account and a 201 status code.

        return response()->json(new AccountResource($account), 201);
    }
}
