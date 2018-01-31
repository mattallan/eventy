<?php

namespace TorMorten\Eventy;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Registers the eventy singleton
     *
     * @return void
     */
    public function register()
    {
    	$this->app->singleton('eventy', function ($app) {
		    return new Events();
		});
    }
}
