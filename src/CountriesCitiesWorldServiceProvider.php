<?php

namespace CountriesCitiesWorld;

use Illuminate\Support\ServiceProvider;

class CountriesCitiesWorldServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/countries-cities-world.php' => config_path('countries-cities-world.php'),
        ], 'config');

        $this->app->alias('CountriesCitiesWorld\CountriesCitiesWorldServiceProvider', 'CountriesCitW');
    }
}
