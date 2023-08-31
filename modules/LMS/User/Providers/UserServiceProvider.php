<?php

namespace modules\LMS\User\Providers;


use Illuminate\Support\ServiceProvider;
use modules\LMS\User\Models\User;

class UserServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        config()->set('auth.providers.users.model', User::class);
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/user_route.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', namespace: 'User');
    }
}
