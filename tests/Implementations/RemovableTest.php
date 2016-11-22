<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;

class RemovableTest extends AbstractTest
{
    public function testRemove()
    {
        $arr = Collections::newArrayList([3, 434, 34, 5]);
        $arr2 = Collections::newArrayList(['pepe' => 'hola', 'lolo' => 12]);

        $arr->remove(0);
        $arr2->remove('pepe');

        $this->assertTrue($arr->get(0) == 434);
        $this->assertFalse($arr2->containsKey('pepe'));
    }

    public function testRemoveElement()
    {
        $arr = Collections::newArrayList([3, 434, 34, 5]);
        $arr2 = Collections::newArrayList(['pepe' => 'hola', 'lolo' => 12]);

        $arr->removeElement(3);
        $arr2->removeElement('hola');

        $this->assertFalse($arr->contains(3));
        $this->assertFalse($arr2->contains('hola'));
    }
}
