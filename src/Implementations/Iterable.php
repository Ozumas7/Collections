<?php

namespace Kolter\Collections\Implementations;

/**
 * Class Iterable.
 */
trait Iterable
{
    /**
     * @var int
     */
    protected $position = 0;

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->getElements()[(array_keys($this->getElements())[$this->position])];
    }

    public function next()
    {
        ++$this->position;
    }

    /**
     * @return bool|mixed
     */
    public function key()
    {
        return array_keys($this->getElements())[$this->position];
    }

    /**
     * @return bool
     */
    public function valid() : bool
    {
        return  count($this->getElements()) > $this->position;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @param callable $callback
     *
     * @return $this
     */
    public function each(callable $callback)
    {
        $i = 0;
        foreach ($this as $key => $value) {
            $result = $callback($value, $key, $i);
            if ($result === false or $result === 'break') {
                break;
            }
            if ($result === 'continue') {
                continue;
            }
            ++$i;
        }
        unset($i);

        return $this;
    }
}
