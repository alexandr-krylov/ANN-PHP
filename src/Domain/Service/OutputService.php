<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ANNPhp\Domain\Service;

use ANNPhp\Domain\Entity\Neuron;

/**
 * Description of GrnerateOutput
 *
 * @author alma
 */
class OutputService
{
    protected $neuron;
    protected $inputVector;
    public function __construct(Neuron $neuron, $inputVector)
    {
        $this->neuron = $neuron;
        $this->inputVector = $inputVector;
    }
    public function getOutput()
    {
        $sum = 0;
        foreach ($this->neuron->getWeightVector() as $key => $value) {
            if (key_exists($key, $this->inputVector)) {
                $sum += $this->inputVector * $value;
            }
        }
        return $this->neuron->getActivationFunction()->activation($sum);
    }
}
