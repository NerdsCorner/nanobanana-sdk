<?php

namespace NerdsCorner\NanoBanana\Tests;

use NerdsCorner\NanoBanana\NanoBananaClass;
use PHPUnit\Framework\TestCase;

class NanoBananaClassTest extends TestCase
{
    public function test_can_be_instantiated_without_errors(): void
    {
        $instance = new NanoBananaClass();

        $this->assertInstanceOf(NanoBananaClass::class, $instance);
    }
}
