<?php

namespace Command\Help;

use Minicli\App;
use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    /** @var  array */
    protected $command_map = [];

    public function boot(App $app): void
    {
        parent::boot($app);
        $this->command_map = $app->commandRegistry->getCommandMap();
    }

    public function handle(): void
    {
        $this->info('Available Commands');

        foreach ($this->command_map as $command => $sub) {

            $this->newline();
            $this->out($command, 'info_alt');

            if (is_array($sub)) {
                foreach ($sub as $subcommand) {
                    if ($subcommand !== 'default') {
                        $this->newline();
                        $this->out(sprintf('%s%s', '└──', $subcommand));
                    }
                }
            }
            $this->newline();
        }

        $this->newline();
        $this->newline();
    }
}
