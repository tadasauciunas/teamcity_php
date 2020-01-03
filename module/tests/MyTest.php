<?php

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function testNothing(): void
    {
        $this->assertSame(1, 1);
    }
}
