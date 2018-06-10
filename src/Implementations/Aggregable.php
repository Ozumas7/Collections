<?php

namespace Kolter\Collections\Implementations;

use Kolter\Collections\Collections;
use Kolter\Collections\Interfaces\Collection;

/**
 * Class Aggregable.
 */
trait Aggregable
{
    /**
     * @param $element
     * @param null $key
     *
     * @return Collection
     */
    public function add($element, $key = null) : Collection
    {
        $aux = $this->getElements();
        if (is_null($key)) {
            $aux[] = $element;
        } else {
            $aux[$key] = $element;
        }

        return $this->return($aux);
    }

    /**
     * @param $element
     * @param null $key
     * @return Collection
     */
    public function set($element, $key = null) : Collection
    {
        $aux = $this->getElements();
        if (is_null($key)) {
            $aux[] = $element;
        } else {
            $aux[$key] = $element;
        }

        return $this->return($aux);
    }

    /**
     * @param array $elements
     *
     * @return Collection
     */
    public function addAll(array $elements) : Collection
    {
        $result = $this->getElements();
        $aux = Collections::newArrayList($elements);
        foreach ($elements as $key=>$value){
            if($aux->hasAssocKeys()){
                $result[$key] = $value;
            } else {
                $result[] = $value;
            }
        }
        return $this->return($result);
    }

    /**
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->elements);
    }

    /**
     * @param $element
     *
     * @return Collection
     */
    public function push($element) : Collection
    {
        $aux = $this->getElements();

        array_push($aux, $element);

        return $this->return($aux);
    }
}
