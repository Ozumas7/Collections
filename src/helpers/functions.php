<?php

use Kolter\Collections\ArrayList;

function arrayList($array = []) {
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

function collect($array = []){
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