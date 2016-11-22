<?php

namespace Kolter\Collections\Exceptions;

class NoSuchElementException extends \Exception
{
    protected $message = 'Element is not in array';
}
