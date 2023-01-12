<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Profile;
use App\Models\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $categories = Category::all();

        View::share('categories', $categories);

        $setting = Settings::find(1);
        View::share('setting', $setting);

        $profile = Profile::find(1);
        View::share('profile', $profile);
    }
}
