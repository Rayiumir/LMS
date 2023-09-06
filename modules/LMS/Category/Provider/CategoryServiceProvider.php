<?php

namespace modules\LMS\Category\Provider;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/category_route.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', namespace: 'Categories');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    public function boot(): void
    {
        config()->set('sidebar.items.categories', [
            "icon" => "fa-list-tree",
            "title" => "دسته بندی",
            "url" => to_route('category.index')
        ]);
    }
}
