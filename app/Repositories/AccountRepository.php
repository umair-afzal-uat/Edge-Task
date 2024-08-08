<?php

namespace App\Repositories;

use App\Models\Account;

class AccountRepository implements AccountRepositoryInterface
{
    public function create(array $data): Account
    {
        return Account::create($data);
    }

    public function findByEmail(string $email): ?Account
    {
        return Account::where('email', $email)->first();
    }
}
