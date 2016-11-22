<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;

class SelectableTest extends AbstractTest
{
    public function testGet()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertEquals($arr->get('foo'), 'boo');
    }

    public function testFirst()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertEquals($arr->first(), 'boo');
    }

    public function testLast()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertEquals($arr->last(), 'programming');
    }

    public function testAll()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertEquals($arr->all(), ['foo' => 'boo', 'php' => 'programming']);
    }

    public function testSublist()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming', 'ruby' => 'oop', 'python' => 'bigdata']);

        $this->assertEquals($arr->sublist(1)->all(), ['php' => 'programming', 'ruby' => 'oop', 'python' => 'bigdata']);
    }
}
