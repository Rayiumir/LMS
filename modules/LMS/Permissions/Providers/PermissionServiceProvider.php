<?php

namespace modules\LMS\Permissions\Providers;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/permissions_route.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', namespace: 'Permission');
        $this->loadJsonTranslationsFrom(__DIR__ . "/../Resources/Lang/fa.json");
    }

    public function boot(): void
    {
        config()->set('sidebar.items.permissions', [
            "icon" => "fa-lock",
            "title" => "دسترسی ها",
            "url" => route('permissions.index')
        ]);
    }
}
