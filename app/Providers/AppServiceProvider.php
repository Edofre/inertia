<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
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
        // Make sure we set the proper layout file
        Inertia::setRootView('layouts.app');

        // If you're using Laravel Mix, you can use the mix-manifest.json for this.
        Inertia::version(function () {
            return md5_file(public_path('mix-manifest.json'));
        });

        // Add validation errors to the view
        Inertia::share([
            'errors' => function () {
                return Session::get('errors')
                    ? Session::get('errors')->getBag('default')->getMessages()
                    : (object)[];
            },
        ]);

        // Add flash messages
        Inertia::share('flash', function () {
            return [
                'success' => Session::get('success'),
                'error'   => Session::get('error'),
            ];
        });
    }
}
