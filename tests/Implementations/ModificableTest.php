<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;

class ModificableTest extends AbstractTest
{
    public function testFilter()
    {
        $arr = Collections::newArrayList([2, 4, 6, 8, 12]);

        $arr->filter(function ($value) {
            return $value > 5;
        });

        $this->assertContains(6, $arr->all());
        $this->assertContains(8, $arr->all());
        $this->assertContains(12, $arr->all());
        $this->assertTrue($arr->length() == 3);
    }

    public function testMap()
    {
        $arr = Collections::newArrayList([2, 4, 6, 8, 12]);
        $expected = [1, 2, 3, 4, 6];
        $arr->map(function ($value) {
            return $value / 2;
        });

        $this->assertEquals($arr->all(), $expected);
    }

    public function intersect()
    {
        $arr = Collections::newArrayList([1, 2, 3, 34, 577, 87, 3]);
        $arr2 = [577, 3, 128];

        $arr->intersect($arr2);

        $this->assertEquals($arr->all(), [577, 3]);
    }

    public function fill()
    {
        $arr = [1, 2, 4, 5, 4, 5];
        $list = Collections::newArrayList($arr);
        $newArr = [1, 2, 4, 5, 4, 5, 0, 0, 0, 0, 0, 0];

        $list->fill(5, 6, 0);

        $this->assertEquals($list->all(), $newArr);
    }
}
