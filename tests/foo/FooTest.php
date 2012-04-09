<?php

class FooTest extends PHPUnit_Framework_TestCase
{
    public function testSomethingGeneric()
    {
        $this->assertTrue(true);
    }
    
    /**
     * @group noWay
     */
    public function testSomethingMoreSpecific()
    {
        $this->assertTrue(true);
    }
}