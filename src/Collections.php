<?php

namespace Kolter\Collections;

/**
 * Class Collections.
 */
class Collections
{
    /**
     * @param array $array
     *
     * @return ArrayList
     */
    public static function newArrayList($array = []) : ArrayList
    {
        $result = new ArrayList();
        $func_get_args = new ArrayList(func_get_args());
        if ($array instanceof ArrayList) {
            $result->setElements($array->all());

            return $result;
        }
        if ($func_get_args->length() > 1) {
            return $func_get_args;
        }
        $result->setElements($array);

        return  $result;
    }
}
