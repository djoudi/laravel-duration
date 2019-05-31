<?php

namespace Djoudi\LaravelPhpDuration;

use Illuminate\Support\ServiceProvider;
use Khill\Duration\Duration;


class DurationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/LaravelPhpDuration.php', 'laravel-php-duration');
        $this->publishThings();
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'LaravelPhpDuration');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register facade
        $this->app->singleton('laravel-php-duration', function () {
            return new Duration;
        });
    }

    public function publishThings(){
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/LaravelPhpDuration.php' => config_path('LaravelPhpDuration.php'),
            ], 'config');
        }
    }
}