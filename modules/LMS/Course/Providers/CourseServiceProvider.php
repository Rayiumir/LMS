<?php

namespace modules\LMS\Course\Providers;

use Illuminate\Support\ServiceProvider;

class CourseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/course_route.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', namespace: 'Courses');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    public function boot(): void
    {
        config()->set('sidebar.items.courses', [
            "icon" => "fa-video",
            "title" => "دوره ها",
            "url" => route('course.index')
        ]);
    }
}
