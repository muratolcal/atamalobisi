<?php

namespace App\Providers;

use App\Models\Zoom;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $lessons = Lesson::get();
        $zoom = Zoom::get();
        $teachers = Teacher::get();
        view()->share('lessons',$lessons);
        view()->share('teachers',$teachers);
        view()->share('zoom',$zoom);

    }


}
