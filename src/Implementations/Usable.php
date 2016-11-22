<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Interfaces\Collection;

/**
 * Class Usable.
 */
trait Usable
{
    /**
     * @param $element
     * @param bool $strict
     *
     * @return mixed
     */
    public function getKey($element, $strict = false)
    {
        $this->noSuchElement($element);

        return array_search($element, $this->getElements(), $strict);
    }

    /**
     * @param $element
     *
     * @return bool
     */
    public function contains($element) : bool
    {
        return in_array($element, $this->getElements());
    }

    /**
     * @param array $keys
     *
     * @return bool
     */
    public function containsKeys(array $keys) : bool
    {
        $result = true;
        foreach ($keys as $key => $value) {
            if (!array_key_exists($value, $this->getElements())) {
                $result = false;
                break;
            }
        }

        return $result;
    }

    /**
     * @param array $elements
     *
     * @return bool
     */
    public function containsMany(array $elements)
    {
        $result = true;
        foreach ($elements as $value) {
            if (!in_array($value, $this->all())) {
                $result = false;
                break;
            }
        }

        return $result;
    }

    /**
     * @param $key
     *
     * @return bool
     */
    public function containsKey($key) : bool
    {
        return array_key_exists($key, $this->getElements());
    }

    /**
     * @return Collection
     */
    public function keys() : array
    {
        return array_keys($this->getElements());
    }

    /**
     * @return bool
     */
    public function hasNumericKeys()
    {
        return array_keys($this->getElements()) === range(0, count($this->getElements()) - 1);
    }

    /**
     * @return bool
     */
    public function hasAssocKeys()
    {
        return !$this->hasNumericKeys();
    }

    public function values() : Collection
    {
        return $this->return(array_values($this->getElements()));
    }
}
