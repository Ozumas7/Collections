<?php

namespace Kolter\Collections\Exceptions;

class IndexOutOfBoundException extends \Exception
{
    protected $message = 'Key is out of the size of the array';
}
