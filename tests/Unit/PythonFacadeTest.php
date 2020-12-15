<?php


namespace Tests\Unit;


use robertogallea\LaravelPython\Services\LaravelPython;
use Tests\TestCase;

class PythonFacadeTest extends TestCase
{
    /** @test */
    public function it_can_use_facade()
    {
        $this->instance('python', $this->mock(LaravelPython::class, function ($mock) {
            $mock->shouldReceive('run')
                ->once()
                ->with('test')
                ->andReturn('test');
        }));

        $result = \Python::run('test');

        $this->assertEquals('test', $result);
    }
}