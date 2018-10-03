<?php

namespace Appscyclone\Api;

use Illuminate\Support\ServiceProvider;
use Appscyclone\Api\Console\PublishConfigCommand;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $configPath = __DIR__.'/../config/appscyclone-api.php';
        $this->publishes([
            $configPath => config_path('appscyclone-api.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->make('Appscyclone\Api\ApiController');
         $this->loadViewsFrom(__DIR__.'/views', 'api');
         // Publish a config file
        
        $configPath = __DIR__.'/../config/appscyclone-api.php';
        $this->mergeConfigFrom($configPath, 'appscyclone-api');
        $this->app->singleton('command.appscyclone-api.publish-config', function () {
            return new PublishConfigCommand();
        });
         if ($this->app->runningInConsole()) {
                $this->registerMigrations();
         }
    }

    /**
     * Register Passport's migration files.
     *
     * @return void
     */
    protected function registerMigrations()
    {
       return $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
