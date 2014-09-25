<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FibonacciSpec extends ObjectBehavior {
    function it_is_initializable()
    {
        $this->shouldHaveType( 'Fibonacci' );
    }

    function it_generates_the_fibonacci_sequence()
    {
        $this->generate( 10 )->shouldBe( [1, 2, 3, 5, 8, 13, 21, 34, 55, 89] );
    }

}
