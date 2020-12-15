<?php


namespace Tests\Unit;


use robertogallea\LaravelPython\Services\LaravelPython;
use Tests\TestCase;

class LaravelPythonTest extends TestCase
{
    /** @test */
    public function it_runs_scripts_without_arguments()
    {
        $service = new LaravelPython();

        $scriptFilename = $this->createFakePythonScript();

        $result = $service->run($scriptFilename);

        $this->assertEquals('Hello world.', $result);

        $this->deleteFakePythonScript($scriptFilename);
    }

    /** @test */
    public function it_runs_script_with_arguments()
    {
        $service = new LaravelPython();

        $scriptFilename = $this->createEchoPythonScript();

        $result = $service->run($scriptFilename, ['Hello parameter.']);

        $this->assertEquals('Hello parameter.', $result);

        $this->deleteFakePythonScript($scriptFilename);
    }

}