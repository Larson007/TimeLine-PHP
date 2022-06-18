<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class NotFoundException extends Exception
{

/**
 * This function is a constructor for the class
 * 
 * @param string message The Exception message to throw.
 * @param int code The exception code.
 * @param previous The previous exception used for the exception chaining.
 */
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

/**
 * It sets the HTTP response code to 404 and then loads the 404.php view
 */
    public function error404()
    {
        http_response_code(404);
        require VIEWS . 'errors/404.php';
    }
}
