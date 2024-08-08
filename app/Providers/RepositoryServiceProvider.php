<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AccountRepositoryInterface;
use App\Repositories\AccountRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
