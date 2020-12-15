<?php


namespace Tests\Unit;


class PythonCommandTest extends \Tests\TestCase
{
    /** @test */
    public function it_can_run_python_commands()
    {
        $filename = $this->createFakePythonScript();

        $this->artisan('python:run ' . $filename)
            ->expectsOutput('Hello world.')
            ->assertExitCode(0);

        $this->deleteFakePythonScript($filename);

    }

    /** @test */
    public function it_can_run_python_commands_with_arguments()
    {
        $filename = $this->createEchoPythonScript("Hello parameter.");

        $this->artisan('python:run ' . $filename . ' "Hello parameter."')
            ->expectsOutput('Hello parameter.')
            ->assertExitCode(0);

        $this->deleteFakePythonScript($filename);

    }
}