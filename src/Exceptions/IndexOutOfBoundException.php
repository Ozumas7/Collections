<?php

namespace Kolter\Collections\Exceptions;

/**
 * Class IndexOutOfBoundException
 * @package Kolter\Collections\Exceptions
 */
class IndexOutOfBoundException extends \Exception
{
    /**
     * @var string
     */
    protected $message = 'Key is out of the size of the array';
}
