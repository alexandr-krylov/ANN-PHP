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
    
    function __construct($weightVector, $activationFunction)
    {
        $this->weightVector = $weightVector;
        $this->activationFunction = $activationFunction;
    }

    
    function getWeightVector()
    {
        return $this->weightVector;
    }

    function getActivationFunction()
    {
        return $this->activationFunction;
    }

    function setWeightVector($weightVector)
    {
        $this->weightVector = $weightVector;
    }

    function setActivationFunction($activationFunction)
    {
        $this->activationFunction = $activationFunction;
    }
}
