<?php
namespace Magni\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PhpUnitCommand extends Command
{
    protected function configure()
    {
        $this->setName('phpunit:process')
            ->addArgument('file', InputArgument::REQUIRED, 'The PHPUnit report.xml file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>phpunit</info>');
        $output->writeln('<error>phpunit-error</error>');
    }
}