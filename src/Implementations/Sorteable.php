<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\ArrayList;
use Kolter\Collections\Interfaces\Collection;
use Kolter\Comparator\Comparator;

/**
 * Class Sorteable.
 */
trait Sorteable
{
    public function sortBy() : Comparator
    {
        return new Comparator($this->elements);
    }

    /**
     * @return Collection
     */
    public function shuffle() : ArrayList
    {
        $aux = $this->getElements();
        shuffle($aux);

        return $this->return($aux);
    }

    public function reverse($preserveKeys = false) : ArrayList
    {
        return $this->return(array_reverse($this->all(), $preserveKeys));
    }
}
