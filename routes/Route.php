<?php

namespace Router;

use Database\DBConnection;


class Route
{

    public $path;
    public $action;
    public $matches;


    public function __construct($path, $action)
    {
        $this->path = trim($path, '/');
        $this->action = $action;
    }


/**
 * It takes a URL and checks if it matches the route's path
 * 
 * @param string url The URL to match against the route.
 * 
 * @return bool The matches array.
 */
    public function matches(string $url): bool
    {
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $pathToMatch = "#^$path$#";
        if (preg_match($pathToMatch, $url, $matches)) {
            $this->matches = $matches;
            return true;
        } else {
            return false;
        }
    }


/**
 * It takes the action string, splits it into a class and a method, instantiates the class, and calls
 * the method
 * 
 * @return ?array The return value is an array.
 */
    public function execute(): ?array
    {
        $params = explode('@', $this->action);
        $controller = new $params[0](new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD));
        $method = $params[1];
        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
    }
}
