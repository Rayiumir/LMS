<?php

namespace modules\LMS\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/user_route.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
