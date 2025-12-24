<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
