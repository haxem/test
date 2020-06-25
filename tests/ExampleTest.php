<?php

namespace Haxem\Test\Tests;

use Orchestra\Testbench\TestCase;
use Haxem\Test\TestServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TestServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
