<?php

namespace Familytree365\Wikitree;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/services.php', 'services.wikitree.api');

        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }
}
