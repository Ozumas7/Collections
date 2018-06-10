<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\Interfaces\Collection;

/**
 * Class Selectable.
 */
trait Selectable
{
    /**
     * @param $key
     *
     * @return bool|mixed
     */
    public function get($key)
    {
        return (array_key_exists($key, $this->getElements())) ? $this->getElements()[$key] : false;
    }

    /**
     * @return mixed
     */
    public function unique()
    {
        return $this->return(array_values(array_unique($this->all())));
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return $this->get($this->keys()[0]);
    }

    /**
     * @return mixed
     */
    public function last()
    {
        return $this->get($this->keys()[$this->length() - 1]);
    }

    /**
     * @return array
     */
    public function all() : array
    {
        return $this->getElements();
    }

    /**
     * @param int  $offset
     * @param null $length
     *
     * @return Collection
     */
    public function sublist($offset = 0, $length = null) : Collection
    {
        $aux = array_slice($this->getElements(), $offset, $length);

        return $this->return($aux);
    }
}
