<?php

namespace App\Http\Controllers;

use App\Http\Resources\AccountResource;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

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

        return view('auth.pages.register');
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
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        // Return the view for the login form.

        return view('auth.pages.login');
    }
    /**
     * Handle the login request.
     *
     * @param \App\Http\Requests\LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        // Retrieve the account based on the provided email address.
        $account = Account::where('email', $request->email)->first();

        // Check if the account exists and the provided password matches the stored hashed password.
        if ($account && Hash::check($request->password, $account->password)) {
            // Store the account ID in the session.
            session(['account_id' => $account->id]);

            // Return a JSON response with the account details and a 200 status code.
            return response()->json(new AccountResource($account), 200);
        }

        // Return a JSON response with an error message and a 401 status code if credentials are invalid.
        return response()->json(['error' => 'Invalid credentials.'], 401);
    }
}
