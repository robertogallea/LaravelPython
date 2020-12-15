<?php

namespace robertogallea\LaravelPython\Commands;

use Illuminate\Console\Command;

class RunPythonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'python:run {script} {arguments?*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run python script';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filename = $this->argument('script');

        $arguments = $this->argument('arguments');

        $result = \Python::run($filename, $arguments);

        $this->info($result);
    }
}
