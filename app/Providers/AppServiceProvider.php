<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
>>>>>>> dev_basis05

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Paginator::useBootstrap();
        Paginator::useBootstrapFive();
    }
}