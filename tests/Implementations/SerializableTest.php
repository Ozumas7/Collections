<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;

class SerializableTest extends AbstractTest
{
    public function test__toString()
    {
        $arr = Collections::newArrayList(['Pablo' => 12, 'pepe' => 1]);
        $arr2 = ['Pablo' => 12, 'pepe' => 1];

        $this->assertEquals(json_encode($arr2, JSON_PRETTY_PRINT), (string) $arr);
    }

    public function testSerialize()
    {
        $arr = [0, 123, 'pablo' => 'lol'];
        $arr2 = Collections::newArrayList($arr);

        $this->assertEquals(serialize($arr), $arr2->serialize());
    }

    public function testUnserialize()
    {
        $string = 'a:3:{i:0;i:0;i:1;i:123;s:5:"pablo";s:3:"lol";}';
        $arr = Collections::newArrayList();

        $this->assertEquals($arr->unserialize($string)->all(), [0, 123, 'pablo' => 'lol']);
    }

    public function testJson()
    {
        $arr = [1, 2, 3, 4, 5];
        $arr2 = Collections::newArrayList($arr);

        $this->assertEquals(json_encode($arr, JSON_PRETTY_PRINT), $arr2->json());
    }

    public function testArray()
    {
        $arr = [1, 2, 3, 4, 5];
        $arr2 = Collections::newArrayList($arr);

        $this->assertEquals($arr, $arr2->array());
    }

    public function testObject()
    {
        $arr = ['0' => 1, 'lol' => 2, 'jeje' => 3, 'what' => 4, 'wtf' => 5];
        $arr2 = Collections::newArrayList($arr);

        $this->assertEquals(json_decode(json_encode($arr)), $arr2->object());
    }
}
