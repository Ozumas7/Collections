<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;

class UsableTest extends AbstractTest
{
    public function testGetKey()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertTrue($arr->getKey('boo') == 'foo');
    }

    public function testContains()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertTrue($arr->contains('boo'));
        $this->assertFalse($arr->contains('boo2'));
    }

    public function testContainsKeys()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertTrue($arr->containsKeys(['foo', 'php']));
        $this->assertFalse($arr->containsKeys(['foo234', 'php2342']));
    }

    public function testContainsMany()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertTrue($arr->containsMany(['boo', 'programming']));
        $this->assertFalse($arr->containsMany(['foo234', 'php2342']));
    }

    public function testContainsKey()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertTrue($arr->containsKey('foo'));
        $this->assertFalse($arr->containsKey('foo2131'));
    }

    public function testKeys()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertEquals($arr->keys(), ['foo', 'php']);
    }

    public function testHasNumericKeys()
    {
        $arr = Collections::newArrayList([1, 2, 3, 4, 5]);

        $this->assertTrue($arr->hasNumericKeys());
    }

    public function testHasAssocKeys()
    {
        $arr = Collections::newArrayList(['foo' => 'boo', 'php' => 'programming']);

        $this->assertTrue($arr->hasAssocKeys());
    }
}
