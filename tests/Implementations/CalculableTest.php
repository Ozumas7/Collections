<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;

class CalculableTest extends AbstractTest
{
    public function testSum()
    {
        $array = Collections::newArrayList([5, 3, 6, 1, 3, 7, 5, 4]);
        $sum = 5 + 3 + 6 + 1 + 3 + 7 + 5 + 4;

        $this->assertEquals($array->sum(), $sum);
    }

    public function testMultiply()
    {
        $array = Collections::newArrayList([5, 3, 6, 1, 3, 7, 5, 4]);
        $sum = 5 * 3 * 6 * 1 * 3 * 7 * 5 * 4;

        $this->assertEquals($array->multiply(), $sum);
    }
}
