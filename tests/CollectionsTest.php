<?php

namespace Kolter\Collections\Tests;

use Kolter\Collections\Collections;
use Kolter\Collections\ArrayList;

class CollectionsTest extends AbstractTest
{
    public function testNewSet()
    {
        $list1 = Collections::newArrayList([1, 2, 4, 5, 4, 3]);
        $list2 = Collections::newArrayList(1, 2, 4, 5, 4, 3);

        $this->assertTrue($list1 instanceof ArrayList);
        $this->assertEquals($list1->getElements(), [1, 2, 4, 5, 4, 3]);

        $this->assertTrue($list2 instanceof ArrayList);
        $this->assertEquals($list2->getElements(), [1, 2, 4, 5, 4, 3]);

        $this->assertTrue($list2 instanceof ArrayList);
        $this->assertEquals($list2->getElements(), [1, 2, 4, 5, 4, 3]);
    }
}
