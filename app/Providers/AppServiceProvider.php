<?php

namespace App\Providers;
use App\Models\Logo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
  public function boot(): void
{
    View::composer('layouts.navbar', function ($view) {
        $view->with('siteLogo', Logo::latest()->first());
        View::share('siteInfo', DB::table('infos')->first());
    });
}
}
