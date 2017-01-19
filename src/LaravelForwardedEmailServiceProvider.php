<?php

namespace BittenByte\LaravelForwardedEmail;

use Illuminate\Support\ServiceProvider;

class LaravelForwardedEmailServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register any package services.
     */
    public function register()
    {
    }
}
