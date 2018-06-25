<?php

namespace spec;

use MinuteAdder;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MinuteAdderSpec extends ObjectBehavior
{
    public function it_can_sum_minutes_in_hour_format()
    {
        $this->sum(['05:12', '10:08', '02:06', '50:04'])->shouldBe('01:07:30');
    }

    public function it_can_sum_hours_too()
    {
        $this->sum(['01:12:00', '02:10:08', '00:02:06'])->shouldBe('03:24:14');
    }

    public function it_removes_some_spaces_on_string()
    {
        $this->sum(['01:12:00', '02:10:08', '00:02:06 '])->shouldBe('03:24:14');
    }
}
