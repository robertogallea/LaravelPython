<?php


namespace robertogallea\LaravelPython\Services;


use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class LaravelPython
{

    public function run(string $filename, array $parameters = [])
    {
        $process = new Process(array_merge([config('laravel-python.python.interpreter'), $filename], $parameters));
        $process->run();
        $process->wait();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return rtrim($process->getOutput(), "\n");
    }
}