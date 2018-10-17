<?php
/**
 * Date: 17/10/2018
 * Time: 16:58
 */

namespace Kolter\Collections\Tests;


use Kolter\Collections\ArrayList;
use Kolter\Collections\Collections;

class HelpersTest extends AbstractTest
{

    public function testarrayList()
    {
        $list1 = arrayList([1, 2, 4, 5, 4, 3]);
        $list2 = arrayList(1, 2, 4, 5, 4, 3);

        $this->assertTrue($list1 instanceof ArrayList);
        $this->assertEquals($list1->getElements(), [1, 2, 4, 5, 4, 3]);

        $this->assertTrue($list2 instanceof ArrayList);
        $this->assertEquals($list2->getElements(), [1, 2, 4, 5, 4, 3]);

        $this->assertTrue($list2 instanceof ArrayList);
        $this->assertEquals($list2->getElements(), [1, 2, 4, 5, 4, 3]);
    }

    public function testCollect()
    {
        $list1 = collect([1, 2, 4, 5, 4, 3]);
        $list2 = collect(1, 2, 4, 5, 4, 3);

        $this->assertTrue($list1 instanceof ArrayList);
        $this->assertEquals($list1->getElements(), [1, 2, 4, 5, 4, 3]);

        $this->assertTrue($list2 instanceof ArrayList);
        $this->assertEquals($list2->getElements(), [1, 2, 4, 5, 4, 3]);

        $this->assertTrue($list2 instanceof ArrayList);
        $this->assertEquals($list2->getElements(), [1, 2, 4, 5, 4, 3]);
    }
}