<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\ArrayList;

/**
 * Class KlistSerializable.
 */
trait Serializable
{
    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->json();
    }

    /**
     * @return string
     */
    public function serialize() : string
    {
        return serialize($this->getElements());
    }

    /**
     * @param string $serialized
     *
     * @return mixed
     */
    public function unserialize(string $serialized) : ArrayList
    {
        $this->setElements(unserialize($serialized));

        return $this;
    }

    /**
     * @param int $options
     * @param int $depth
     *
     * @return string
     */
    public function json($options = JSON_PRETTY_PRINT, $depth = 512) : string
    {
        return json_encode($this->getElements(), $options, $depth);
    }

    /**
     * @param string $string
     *
     * @return $this
     */
    public function fromJson(string $string) : ArrayList
    {
        $arr = json_decode($string);
        $this->setElements($arr);

        return $this;
    }

    /**
     * @return array
     */
    public function array() : array
    {
        return $this->getElements();
    }

    public function object(int $depth = 512, int $options = 0)
    {
        return json_decode($this->json(), false, $depth, $options);
    }
}
