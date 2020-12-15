<?php


namespace robertogallea\LaravelPython;


use robertogallea\LaravelPython\Commands\RunPythonCommand;
use robertogallea\LaravelPython\Services\LaravelPython;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom($this->packagePath() . '/config/laravel-python.php', 'laravel-python');

        $this->app->singleton('python', function () { return new LaravelPython();});
    }

    public function boot()
    {
        $this->publishes([
            $this->packagePath() . '/config/laravel-python.php' => config_path('laravel-python.php')
        ], 'config');

        if ($this->app->runningInConsole()) {
            $this->registerCommands();
        }
    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }

    private function registerCommands()
    {
        $this->commands([
            RunPythonCommand::class
        ]);
    }
}