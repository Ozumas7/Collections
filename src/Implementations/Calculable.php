<?php

namespace Kolter\Collections\Implementations;

/**
 * Class Calculable.
 */
trait Calculable
{
    /**
     * @return float
     */
    public function sum() : float
    {
        return array_sum($this->getElements());
    }

    /**
     * @return float
     */
    public function multiply() : float
    {
        return array_product($this->getElements());
    }
}
