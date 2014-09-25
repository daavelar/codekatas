<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MultiplesOfThreeAndFiveSpec extends ObjectBehavior {
    function it_is_initializable()
    {
        $this->shouldHaveType( 'MultiplesOfThreeAndFive' );
    }

    function  it_returns_the_sum_of_all_multiples_of_3_or_5()
    {
        $this->multiplesSumUntil(1000)->shouldBe(233168);
    }
}
