<?php

namespace Kolter\Collections\Interfaces;

/**
 * Interface Collection.
 */
interface Collection extends \Iterator, \ArrayAccess
{
    /**
     * Collection constructor.
     *
     * @param array $elements
     * @param bool  $immutable
     */
    public function __construct(array $elements, bool $immutable);

    /**
     * @param array $collection
     *
     * @return Collection
     */
    public function return(array $collection) : Collection;

    /**
     * @return bool
     */
    public function getImmutability() : bool;

    /**
     * @param bool $immutability
     *
     * @return mixed
     */
    public function setImmutability(bool $immutability);

    /**
     * @param $key
     *
     * @return mixed
     */
    public function __invoke($key);

    /**
     * @return array
     */
    public function getElements() : array;

    /**
     * @param array $array
     *
     * @return Collection
     */
    public function setElements(array $array) : Collection;
}
