<?php


namespace Tests\Unit;




use robertogallea\LaravelPython\ServiceProvider;

class ServiceProviderTest extends \Tests\TestCase
{
    /** @test */
    public function it_loads_config()
    {
        $this->assertNotNull(config('laravel-python'));
    }




}