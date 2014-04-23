<?php

namespace spec\Task\Plugin\Console\Output;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OutputSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Task\Plugin\Console\Output\Output');
    }

    function it_should_be_writable()
    {
        $this->shouldHaveType('Task\Plugin\Stream\WritableInterface');
    }
}
