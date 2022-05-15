<?php

declare(strict_types=1);

namespace Tests;

use ANNPhp\Domain\Entity\ActivationFunctionInterface;
use PHPUnit\Framework\TestCase;
use ANNPhp\Domain\Entity\TanhFunction;

final class TestTanhFunction extends TestCase
{
    public function providerTanh()
    {
        return [
            [-2, -0.964027580075817],
            [-1.5, -0.905148253644866],
            [-1, -0.761594155955765],
            [-0.5, -0.46211715726001],
            [0, 0],
            [0.5, 0.46211715726001],
            [1, 0.761594155955765],
            [1.5, 0.905148253644866],
            [2, 0.964027580075817],
        ];
    }

    /**
     * @dataProvider providerTanh
     */
    public function testTanh($arg, $value): void
    {
        $activation = new TanhFunction();
        $this->assertInstanceOf(ActivationFunctionInterface::class, $activation);
        $this->assertEqualsWithDelta($value, $activation->activation($arg), 0.00001);
    }
}
