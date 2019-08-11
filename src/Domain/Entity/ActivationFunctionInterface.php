<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ANNPhp\Domain\Entity;

/**
 *
 * @author alma
 */
interface ActivationFunctionInterface
{
    public function activation($sigma);
}
