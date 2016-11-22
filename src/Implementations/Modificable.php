<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\Interfaces\Collection;

/**
 * Class Modificable.
 */
trait Modificable
{
    /**
     * @param callable $callback
     *
     * @return Collection
     */
    public function filter(callable $callback) : Collection
    {
        return $this->return(array_filter($this->getElements(), $callback));
    }

    /**
     * @param callable $callback
     *
     * @return Collection
     */
    public function map(callable $callback) : Collection
    {
        return $this->return(array_map($callback, $this->getElements()));
    }

    /**
     * @param $array
     *
     * @return Collection
     */
    public function intersect($array) : Collection
    {
        return $this->return(array_intersect($this->getElements(), $array));
    }

    /**
     * @param int $starIndex
     * @param int $num
     * @param $value
     *
     * @return Collection
     */
    public function fill(int  $starIndex, int $num, $value) : Collection
    {
        return $this->return(array_fill($starIndex, $num, $value));
    }
}
