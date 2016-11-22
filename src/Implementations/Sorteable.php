<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\Interfaces\Collection;
use Kolter\Comparator\Comparator;

/**
 * Class KlistSorteable.
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
    public function shuffle() : Collection
    {
        $aux = $this->getElements();
        shuffle($aux);

        return $this->return($aux);
    }

    public function reverse($preserveKeys = false) : Collection
    {
        return $this->return(array_reverse($this->all(), $preserveKeys));
    }
}
