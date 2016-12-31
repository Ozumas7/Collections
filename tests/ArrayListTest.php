<?php

namespace Kolter\Collections\Tests;

use Kolter\Collections\Collections;

class ArrayListTest extends AbstractTest
{
    public function testImmutability()
    {
        $arr = Collections::newArrayList([1, 2, 3, 4]);

        $arr->setImmutability(true);
        $this->assertFalse($arr->return([1, 2, 4, 5]) === $arr);

        $arr = Collections::newArrayList([1, 2, 3, 4]);
        $arr->setImmutability(false);

        $this->assertTrue($arr->return([1, 2, 4, 5]) === $arr);
    }

    public function testInvoke()
    {
        $arr = Collections::newArrayList([1, 2, 3]);

        $element = $arr(0);

        $this->assertEquals($element, $arr->get(0));
    }

    public function testEmpty()
    {
        $arr1 = Collections::newArrayList();
        $arr2 = Collections::newArrayList(1, 3, 4, 5);

        $this->assertTrue($arr1->empty());
        $this->assertFalse($arr2->empty());
    }

    public function testLenght()
    {
        $arr2 = Collections::newArrayList(1, 3, 4, 5);

        $this->assertEquals($arr2->length(), 4);
    }

    /**
     * @expectedException Kolter\Collections\Exceptions\NoSuchElementException
     */
    public function testNoSuchElement()
    {
        $arr2 = Collections::newArrayList(1, 3, 4, 5);

        $arr2->noSuchElement(10);
    }

    /**
     *
     */
    public function testArrayAcces(){
        $arr2 = Collections::newArrayList(1, 3, 4, 5);
        $arr2[] = 8;

        $arr2[1] = 5;

        unset($arr2[0]);

        $this->assertEquals($arr2->getElements(), [5, 4, 5,8]);
    }
}
