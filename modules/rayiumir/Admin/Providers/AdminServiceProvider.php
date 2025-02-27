<?php

namespace Modules\Rayiumir\Admin\Providers;


use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/admin_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Admin');
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'AdminConfig');
    }

    public function boot(): void
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.admin', [
                'url' => route('index'),
                'title' => 'میزکار اصلی',
                'icon' => 'fa-home'
            ]);
        });
    }
}
