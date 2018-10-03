<?php

namespace Appscyclone\Api\Console;

use Illuminate\Console\Command;

class PublishConfigCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'appscyclone-api:publish-config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish config';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('Publish config files');
        $this->call('vendor:publish', [
            '--provider' => 'Appscyclone\Api\ApiServiceProvider',
            '--tag'      => ['config'],
        ]);
    }
}
