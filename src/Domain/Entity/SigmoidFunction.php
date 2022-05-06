<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ANNPhp\Domain\Entity;

/**
 * Description of SigmoidFunction
 *
 * @author alma
 */
class SigmoidFunction implements ActivationFunctionInterface
{
    public function activation($sigma) 
    {
        return 1 / (1 + exp(- $sigma));
    }
}
