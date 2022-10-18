<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use ANNPhp\Domain\Entity\Neuron;
use ANNPhp\Domain\Entity\TanhFunction;

final class NeuronTest extends TestCase
{
    public function providerWeghtVector()
    {
        return [
            [[-5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5]]
        ];
    }

    /**
     * @dataProvider providerWeghtVector
     */
    public function testCreate($weghtVector)
    {
        $neuron = new Neuron(
            $weghtVector,
            new TanhFunction()
        );
        $this->assertInstanceOf(Neuron::class, $neuron);
    }
}
