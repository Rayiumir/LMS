<?php

namespace Modules\Rayiumir\Permission\Providers;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/permission_routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Permission');
    }

    public function boot(): void
    {
        $this->app->booted(static function(){
            config()->set('AdminConfig.menus.permission', [
                'route' => 'permissions',
                'url' => route('permissions.index'),
                'title' => 'دسترسی ها',
                'icon' => 'fa-lock'
            ]);
        });
    }
}
