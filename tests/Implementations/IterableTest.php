<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;

class IterableTest extends AbstractTest
{
    public function testIterable1()
    {
        $arr = Collections::newArrayList(['pepe' => 1, 'lool' => 'goo', 'test' => 3]);
        $arr2 = [];
        foreach ($arr as $key => $value) {
            $arr2[$key] = $value;
        }
        $this->assertEquals($arr->all(), $arr2);
    }

    public function testEach()
    {
        $arr = [1, 3, 7, 4, 43, 767, 4];
        $list = Collections::newArrayList($arr);
        $new = [];
        $i2 = 0;
        $list->each(function ($value, $key, $i) use (&$new, &$i2) {
            $new[$key] = $value;
            $i2 = $i;
        });
        $this->assertEquals($arr, $new);
        $this->assertEquals($i2 + 1, $list->length());
    }
}
