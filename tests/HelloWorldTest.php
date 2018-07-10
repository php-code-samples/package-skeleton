<?php

use PeteHouston\Sample\HelloWorld;

class HelloWorldTest extends PHPUnit_Framework_TestCase {

    public function testGoodGreeting()
    {
        $hello = new HelloWorld;

        $this->assertEquals("Hello World", $hello->greet());
        $this->assertContains("Hello", $hello->greet());
    }
}
