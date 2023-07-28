<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

final class OneTest extends TestCase
{
    public function testName(): void
    {
        self::assertEquals('1', '1');
    }
}
