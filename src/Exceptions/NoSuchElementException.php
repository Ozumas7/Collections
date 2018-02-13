<?php

namespace Kolter\Collections\Exceptions;

/**
 * Class NoSuchElementException
 * @package Kolter\Collections\Exceptions
 */
class NoSuchElementException extends \Exception
{
    /**
     * @var string
     */
    protected $message = 'Element is not in array';
}
