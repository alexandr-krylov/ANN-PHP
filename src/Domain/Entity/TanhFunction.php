<?php

/**
 * Hyperbolic tangent
 * php version 8.1.4
 *
 * @category Transfer_Function
 * @package  ANN-PHP
 * @author   Alexandr Krylov <alexandr.krylov@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GNU General Public License v 3
 * @link     https://opensource.org/licenses/GPL-3.0
 */

namespace ANNPhp\Domain\Entity;

/**
 *
 */
class TanhFunction implements ActivationFunctionInterface
{
    /**
     * @param  $sigma
     * @return float
     */
    public function activation($sigma)
    {
         return tanh($sigma);
    }
}
