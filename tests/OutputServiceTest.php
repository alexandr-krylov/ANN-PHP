<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use ANNPhp\Domain\Entity\{Neuron, TanhFunction};
use ANNPhp\Domain\Service\OutputService;

class OutputServiceTest extends TestCase
{
    public function providerGetOutput()
    {
        return [
            [
                [1, 2, 3, 4, 5, 6, 7],
                0.76142,
                [1, -0.5, 0.33333, -0.25, 0.2, -0.166666, 0.1428]
            ]
        ];
    }

    /**
     * @param $input
     * @param $output
     * @return void
     * @dataProvider providerGetOutput
     */
    public function testGetOutput($input, $output, $weight)
    {
        $neuron = new Neuron($weight, new TanhFunction());
        $outputService = new OutputService($neuron, $input);
        $this->assertEqualsWithDelta($output, $outputService->getOutput(), 0.0001);
    }
}
