<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        include __DIR__.'/route.php';
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
         $this->publishes([
                __DIR__.'/views' => base_path('resources/views/laraveldaily/timezones'),
            ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
