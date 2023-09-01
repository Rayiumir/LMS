<?php

namespace modules\LMS\Home\Providers;


use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/home_route.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', namespace: 'User');
    }
}
