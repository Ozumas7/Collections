<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\Interfaces\Collection;

/**
 * Trait Removable
 * @package Kolter\Collections\Implementations
 */
trait Removable
{
    /**
     * @param $mixed
     *
     * @return Collection
     * @throws \Kolter\Collections\Exceptions\NoSuchElementException
     */
    public function remove($mixed) : Collection
    {
        $this->noSuchElement($this->get($mixed));
        $aux = $this->getElements();
        if ($this->hasNumericKeys()) {
            array_splice($aux, $mixed, 1);
        } else {
            unset($aux[$mixed]);
        }

        return $this->return($aux);
    }

    /**
     * @param $element
     *
     * @return Collection
     * @throws \Kolter\Collections\Exceptions\NoSuchElementException
     */
    public function removeElement($element) : Collection
    {
        $this->noSuchElement($element);

        return $this->remove($this->getKey($element));
    }
}
