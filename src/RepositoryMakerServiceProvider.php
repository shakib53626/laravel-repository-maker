<?php

namespace Shakib53626\LaravelRepositoryMaker;

use Illuminate\Support\ServiceProvider;

class RepositoryMakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Register the commands
        $this->commands([
            Commands\MakeRepository::class,
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // No additional bootstrapping required for now
    }
}
