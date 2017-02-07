<?php


namespace Installer\Exceptions;

use Exception;

/**
 * Operation Exception
 */
class OperationException extends Exception
{
    protected $message = 'An exception occurred while running an operation.';
}
