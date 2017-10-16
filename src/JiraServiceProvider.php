<?php namespace Bss\JiraAddon;

use Illuminate\Support\ServiceProvider;

class JiraServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/../vendor/autoload.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Bss\JiraAddon\Controllers\JiraBaseController');
        $this->app->make('Bss\JiraAddon\Controllers\JiraProjectController');
    }
}
