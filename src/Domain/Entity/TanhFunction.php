<?php
/**
 * Hyperbolic tangent
 * php version 8.1.4
 * 
 * @category Transfer_Function
 */

namespace ANNPhp\Domain\Entity;

class TanhFunction implements ActivationFunctionInterface
{
    public function activation($sigma)
    {
         return tanh($sigma);
    }
}
