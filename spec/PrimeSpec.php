<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TheLargestPrimeSpec extends ObjectBehavior {
    function it_is_initializable()
    {
        $this->shouldHaveType( 'TheLargestPrime' );
    }

    public function it_returns_true_if_one_is_prime()
    {
        $this->isPrime( 1 )->shouldBe( true );
    }

    public function it_returns_true_if_two_is_prime()
    {
        $this->isPrime( 2 )->shouldBe( true );
    }

    public function it_returns_true_if_three_is_prime()
    {
        $this->isPrime( 3 )->shouldBe( true );
    }

    public function it_returns_false_if_four_is_prime()
    {
        $this->isPrime( 4 )->shouldBe( false );
    }

    public function it_throws_an_exception_if_a_number_below_zero_is_provided()
    {
        $this->shouldThrow( 'InvalidArgumentException' )->duringIsPrime( 0 );
    }

}
