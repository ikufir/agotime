<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_two_are_same()
    {
        $this->assertSame(4, 2 + 2);
    }
}
