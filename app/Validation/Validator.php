<?php

namespace App\Validation;

use App\Controllers\UserController;
use App\Models\User;

class Validator
{
    private $data;
    private $errors;

    public function __construct(array $data)
    {
        $this->data = $data;
    }



/**
 * It loops through the rules array, and if the key exists in the data array, it loops through the
 * rules array and runs the appropriate validation function
 * 
 * @param array rules an array of rules to validate.
 * 
 * @return ?array The errors array.
 */
    public function validate(array $rules): ?array
    {
        foreach ($rules as $name => $rulesArray) {
            if (array_key_exists($name, $this->data)) {
                foreach ($rulesArray as $rule) {
                    switch ($rule) {
                        case 'required':
                            $this->required($name, $this->data[$name]);
                            break;
                        case 'valide':
                            $this->emailFormat($name, $this->data[$name]);
                            break;
                        case substr($rule, 0, 3) === 'min':
                            $this->min($name, $this->data[$name], $rule);
                            break;
                        default:
                            # code...
                            break;
                    }
                }
            }
        }
        return $this->getErrors();
    }



/**
 * It checks if a value is empty, and if it is, it adds an error to the errors array
 * 
 * @param string name The name of the field.
 * @param string value The value to be validated.
 */
    private function required(string $name, string $value): void
    {
        $value = trim($value);
        if (!isset($value) || is_null($value) || empty($value)) {
            $this->errors[$name][] = "$name est requis.";
        }
    }



/**
 * It checks if the length of the value is less than the limit
 * 
 * @param string name The name of the field
 * @param string value the value of the field
 * @param string rule min:5
 */
    private function min(string $name, string $value, string $rule): void
    {
        preg_match_all('/(\d+)/', $rule, $matches);
        $limit = (int) $matches[0][0];
        if (strlen($value) < $limit) {
            $this->errors[$name][] = "$name doit comprendre un minimum de {$limit} caractères.";
        }
    }



/**
 * It checks if the value of the email field is a valid email address.
 * 
 * If it's not, it adds an error message to the errors array.
 * 
 * The errors array is an associative array. The key is the name of the field. The value is an array of
 * error messages.
 * 
 * The error messages are added to the array using the [] syntax.
 * 
 * The [] syntax is a shortcut for the array_push() function.
 * 
 * The array_push() function adds one or more elements to the end of an array.
 * 
 * The array_push() function returns the new number of elements in the array.
 * 
 * @param string name The name of the field to validate.
 * @param string value The value of the field.
 */
    private function emailFormat(string $name, string $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$name][] = "Veuillez indiquez une adrese $name valide.";
        }
    }


    
/**
 * > This function returns the errors array.
 * 
 * @return ?array The errors array.
 */
    private function getErrors(): ?array
    {
        return $this->errors;
    }
}
