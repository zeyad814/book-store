<?php

namespace App\Providers;
use App\Repository\repoInterface;
use App\Repository\wishlistRepo;
use Illuminate\Support\ServiceProvider;

class RepoProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
      $this->app->bind(repoInterface::class, wishlistRepo::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
