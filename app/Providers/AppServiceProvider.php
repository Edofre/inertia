<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        Inertia::setRootView('layouts.app');
        // If you're using Laravel Mix, you can use the mix-manifest.json for this.
        Inertia::version(function () {
            return md5_file(public_path('mix-manifest.json'));
        });
    }
}
