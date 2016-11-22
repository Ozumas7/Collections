<?php

namespace Kolter\Collections\Tests\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Tests\AbstractTest;

/**
 * Class AggregableTest.
 *
 * @test AggregableTest
 */
class AggregableTest extends AbstractTest
{

    public function testAdd()
    {
        $set = Collections::newArrayList([1, 6, 7, 4]);
        $set->add(5);

        $this->assertTrue($set->contains(5));

        $set = Collections::newArrayList(['test' => 'testAdd', 'language' => 'php']);
        $set->add('Kolter', 'author');

        $this->assertTrue($set->contains('Kolter'));
        $this->assertTrue($set->containsKey('author'));
    }


    public function testAddAll()
    {
        $set = Collections::newArrayList([1, 6, 7, 4]);
        $set->addAll([5, 10, 15]);

        $this->assertTrue($set->containsMany([5, 10, 15]));

        $set = Collections::newArrayList(['test' => 'testAdd', 'language' => 'php']);
        $set->addAll(['author' => 'Kolter', 'version' => 5.6]);

        $this->assertTrue($set->containsMany(['Kolter', 5.6]));
        $this->assertTrue($set->containsKeys(['author', 'version']));
    }


    public function testPop()
    {
        $arr = Collections::newArrayList([1, 5, 6, 4]);

        $arr2 = $arr->pop();

        $this->assertEquals($arr2, 4);
    }

    public function testPush()
    {
        $arr = Collections::newArrayList([1, 5, 6, 4]);

        $arr->push(10);

        $this->assertEquals($arr->pop(), 10);
    }
}
