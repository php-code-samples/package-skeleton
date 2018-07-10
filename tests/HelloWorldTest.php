<?php

namespace PhpCodeSamples\PackageSkeleton\Tests;

use

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function testGoodGreeting()
    {
        $hello = new HelloWorld;

        $this->assertEquals("Hello World", $hello->greet());
        $this->assertContains("Hello", $hello->greet());
    }
}
