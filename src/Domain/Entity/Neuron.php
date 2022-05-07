<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ANNPhp\Domain\Entity;

/**
 * Description of Neuron
 *
 * @author alma
 */
class Neuron extends AbstractEntity
{
    protected $weightVector = [];
    protected $activationFunction;
    public function __construct(
        $weightVector,
        ActivationFunctionInterface $activationFunction
    ) {
        $this->weightVector = $weightVector;
        $this->activationFunction = $activationFunction;
    }
    public function getWeightVector()
    {
        return $this->weightVector;
    }
    public function getActivationFunction()
    {
        return $this->activationFunction;
    }
    public function setWeightVector($weightVector)
    {
        $this->weightVector = $weightVector;
    }
    public function setActivationFunction($activationFunction)
    {
        $this->activationFunction = $activationFunction;
    }
}
