<?php

namespace spec\Giordan;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FirstclassSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Giordan\Firstclass');
    }
}
