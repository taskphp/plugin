<?php

namespace Task\Plugin\Console\Output;

use Symfony\Component\Console\Output\ConsoleOutput;
use Task\Plugin\Stream\WritableInterface;

class Output extends ConsoleOutput implements WritableInterface
{
}
