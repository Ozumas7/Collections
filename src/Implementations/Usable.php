<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\ArrayList;
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
     * @throws \Kolter\Collections\Exceptions\NoSuchElementException
     */
    public function getKey($element, $strict = false)
    {
        if(in_array($element,$this->getElements())){
            return null;
        }

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
    public function containsMany(array $elements) : bool
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
     * @return array
     */
    public function keys() : array
    {
        return array_keys($this->getElements());
    }

    /**
     * @return bool
     */
    public function hasNumericKeys() : bool
    {
        return array_keys($this->getElements()) === range(0, count($this->getElements()) - 1);
    }

    /**
     * @return bool
     */
    public function hasAssocKeys() : bool
    {
        return !$this->hasNumericKeys();
    }

    /**
     * @return ArrayList
     */
    public function values() : ArrayList
    {
        return $this->return(array_values($this->getElements()));
    }

    /**
     * @param int $offset
     * @param int $length
     * @param bool $preserveKeys
     * @return ArrayList
     */
    public function slice(int $offset, int $length, $preserveKeys = false) : ArrayList
    {
        if($this->hasAssocKeys()) return $this->return($this->all());

        return $this->return(array_slice($this->all(),$offset,$length,$preserveKeys));
    }
}

