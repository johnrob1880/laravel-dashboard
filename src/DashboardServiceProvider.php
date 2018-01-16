<?php

namespace Johnrob1880\Dashboard;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('dashboard.php'),
        ], 'config');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'dashboard');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/dashboard'),
        ]);

        $this->publishes([
            __DIR__ . '/components' => resource_path('assets/js/components/vendor/dashboard'),
        ]);

        $this->publishes([
            __DIR__. '/assets' => public_path('vendor/dashboard'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/index.js' => resource_path('assets/js/components/vendor/dashboard/index.js'),
        ]);
       
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config.php', 'dashboard'
        );

        App::bind('dashboard', function() {
            return new \Johnrob1880\Dashboard\Dashboard;

        });
    }
}
