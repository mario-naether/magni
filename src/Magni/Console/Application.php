<?php
namespace Magni\Console;

use Magni\Console\Command\PhpUnitCommand;
use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    const NAME = 'Magni Report Application';
    const VERSION = '0.0.1';

    public function __construct()
    {
        parent::__construct(static::NAME, static::VERSION);
        $this->add(new PhpUnitCommand());
    }
}