<?php


namespace Tests;


use robertogallea\LaravelPython\Facades\PythonFacade;
use robertogallea\LaravelPython\ServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }

    protected function getApplicationAliases($app)
    {
        return [
            'Python' => PythonFacade::class,
        ];
    }


}