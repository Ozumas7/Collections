<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;
use Kolter\Comparator\Comparator;

class SorteableTest extends AbstractTest
{
    public function testSortBy()
    {
        $arr = Collections::newArrayList([6, 3, 7, 5]);
        $arr2 = [6, 3, 7, 5];
        $sorteable = $arr->sortBy();
        $callable = function ($a, $b) {
            return $a < $b;
        };

        $this->assertTrue($sorteable instanceof Comparator);
        $sorteable->byValues()->keepKeys()->sort($callable);
        uasort($arr2, $callable);

        $this->assertEquals($arr->all(), $arr2);
    }

    public function testShuffle()
    {
        $arr = Collections::newArrayList([1, 3, 4, 5]);

        $arr->shuffle();

        $this->assertEquals($arr->length(), 4);
    }

    public function testReverse()
    {
        $arr = Collections::newArrayList([1, 3, 4, 5]);

        $arr->reverse();

        $this->assertEquals($arr->all(), [5, 4, 3, 1]);
    }
}
