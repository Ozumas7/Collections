<?php

namespace Kolter\Collections;

use Kolter\Collections\Exceptions\NoSuchElementException;
use Kolter\Collections\Implementations\Calculable;
use Kolter\Collections\Implementations\Modificable;
use Kolter\Collections\Implementations\Removable;
use Kolter\Collections\Implementations\Selectable;
use Kolter\Collections\Implementations\Aggregable;
use Kolter\Collections\Implementations\IterableArray;
use Kolter\Collections\Implementations\Serializable;
use Kolter\Collections\Implementations\Sorteable;
use Kolter\Collections\Implementations\Usable;
use Kolter\Collections\Interfaces\Collection;

/**
 * Class Collections.
 */
class ArrayList implements Collection
{
    use Modificable,Calculable,Selectable,Removable,IterableArray,Aggregable,Usable,Sorteable,Serializable;

    /**
     * @var bool
     */
    protected $immutable;
    /**
     * @var array
     */
    protected $elements;

    /**
     * Collections constructor.
     *
     * @param array $elements
     * @param bool  $immutable
     */
    public function __construct(array $elements = [], bool $immutable = false)
    {
        $this->elements = $elements;
        $this->immutable = $immutable;
    }

    /**
     * @param bool $immutability
     *
     * @return Collection
     */
    public function setImmutability(bool $immutability) : Collection
    {
        $this->immutable = $immutability;

        return $this;
    }

    /**
     * @return bool
     */
    public function getImmutability() : bool
    {
        return $this->immutable;
    }

    /**
     * @param array $array
     *
     * @return $this|Collection
     */
    public function return(array $array) : Collection
    {
        if ($this->immutable) {
            return new self($array);
        }
        $this->elements = $array;

        return $this;
    }

    /**
     * @return array
     */
    public function getElements() : array
    {
        return $this->elements;
    }

    /**
     * @param array $elements
     *
     * @return Collection
     */
    public function setElements(array $elements) : Collection
    {
        $this->elements = $elements;

        return $this;
    }

    /**
     * @return bool
     */
    public function empty() : bool
    {
        return $this->length() == 0;
    }

    /**
     * @return int
     */
    public function length() : int
    {
        return count($this->elements);
    }

    /**
     * @param $element
     *
     * @return bool
     *
     * @throws NoSuchElementException
     */
    public function noSuchElement($element) : bool
    {
        if (!in_array($element, $this->elements)) {
            throw new NoSuchElementException();
        }

        return true;
    }

    /**
     * @param $key
     *
     * @return bool|mixed
     */
    public function __invoke($key)
    {
        return $this->elements[$key];
    }

    public function offsetExists($offset)
    {
        return $this->containsKey($offset);
    }

    public function offsetGet($offset)
    {
        return ($this->containsKey($offset)) ? $this->get($offset) : null;
    }

    public function offsetSet($offset, $value)
    {
        $this->add($value,$offset);
    }

    public function offsetUnset($offset)
    {
        $this->remove($offset);
    }


}
