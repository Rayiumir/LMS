<?php

namespace modules\LMS\Admin\Provider;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/admin_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', namespace: 'Admin');
        $this->mergeConfigFrom(__DIR__ . '/../Config/sidebar.php', 'sidebar');
    }

    public function boot()
    {
        $this->app->booted(function (){
            config()->set('sidebar.items.admin', [
                "icon" => "fa-home",
                "title" => "پیشخوان",
                "url" => route('admin.index')
            ]);
        });
    }
}
