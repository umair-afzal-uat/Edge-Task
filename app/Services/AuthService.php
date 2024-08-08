<?php

namespace App\Services;

use App\Repositories\AccountRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\AccountResource;
use Illuminate\Support\Facades\Session;

class AuthService
{
    protected $accountRepository;

    public function __construct(AccountRepositoryInterface $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    public function register(array $data)
    {
        // Create a new account with the provided email and hashed password.
        $account = $this->accountRepository->create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        // Store the account ID in the session.
        Session::put('account_id', $account->id);

        return new AccountResource($account);
    }

    public function login(array $data)
    {
        // Retrieve the account based on the provided email address.
        $account = $this->accountRepository->findByEmail($data['email']);

        // Check if the account exists and the provided password matches the stored hashed password.
        if ($account && Hash::check($data['password'], $account->password)) {
            // Store the account ID in the session.
            Session::put('account_id', $account->id);

            return new AccountResource($account);
        }

        return null;
    }

    public function logout()
    {
        // Remove the account ID from the session.
        Session::forget('account_id');
    }
}
