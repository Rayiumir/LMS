<?php

namespace modules\LMS\Category\Provider;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/category_route.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', namespace: 'Categories');
    }
}
