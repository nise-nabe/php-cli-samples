<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MainTask extends Command
{
    protected function configure()
    {
         $this->setName('main');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
         $output->writeln("\nThis is the default task and the default action \n");
    }
}
