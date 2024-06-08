<?php
require __DIR__ . '/bootstrap.php';

use Luna\Db\Migration;
use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;

class Luna extends CLI
{
    protected function setup(Options $options)
    {
        $options->setHelp('Luna Framework');
        
        $options->registerCommand('migrate', 'Create migration file');
        $options->registerArgument('name', 'Migration file name', true, 'migrate');
    }

    protected function main(Options $options)
    {
        if ($options->getCmd('migrate')) {
            $args = $options->getArgs();

            $name = isset($args[0]) ? $args[0] : false;

            if(!$name)
                return $this->error('Migration name not found');

            Migration::create(__DIR__ . '/database/migrations/', $name);
        } else {
            echo $options->help();
        }
    }
}
// execute it
$cli = new Luna();
$cli->run();