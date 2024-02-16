<?php

namespace App\Providers;

use App\DataBox\UserDataBox;
use Illuminate\Support\ServiceProvider;

class DataBoxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserDataBox::class, fn () => new UserDataBox());
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
