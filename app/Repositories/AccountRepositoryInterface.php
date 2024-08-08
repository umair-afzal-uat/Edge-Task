<?php

namespace App\Repositories;

use App\Models\Account;

interface AccountRepositoryInterface
{
    public function create(array $data): Account;
    public function findByEmail(string $email): ?Account;
}
