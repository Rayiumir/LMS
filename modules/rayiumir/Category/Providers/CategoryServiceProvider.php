<?php

namespace Modules\Rayiumir\Category\Providers;


use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/category_routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Category');
    }

    public function boot(): void
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.category', [
                'route' => 'categories',
                'url' => route('categories.index'),
                'title' => 'دسته بندی',
                'icon' => 'fa-list-tree'
            ]);
        });
    }
}
