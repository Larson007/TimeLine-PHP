<?php

namespace Router;

use App\Exceptions\NotFoundException;


class Router
{
    public $url;
    public $routes = [];



    /**
     * It takes a URL and removes any trailing slashes
     * 
     * @param url The URL that the user is trying to access.
     */
    public function __construct($url)
    {
        $this->url = trim($url, '/');
    }



    /**
     * It adds a new route to the routes array
     * 
     * @param string path The path of the route.
     * @param string action This is the controller and method that will be called when the route is
     * matched.
     */
    public function get(string $path, string $action): void
    {
        /* This is adding a new route to the routes array. */
        $this->routes['GET'][] = new Route($path, $action);
    }



    /**
     * It adds a new route to the routes array
     * 
     * @param string path The path of the route.
     * @param string action This is the controller and method that will be called when the route is
     * matched.
     */
    public function post(string $path, string $action): void
    {
        /* This is adding a new route to the routes array. */
        $this->routes['POST'][] = new Route($path, $action);
    }



    /**
     * It loops through all the routes that match the current request method (GET, POST, etc.) and checks
     * if the current URL matches any of them. If it does, it executes the route's callback function. If it
     * doesn't, it throws an exception
     */
    public function run(): ?array
    {
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->matches($this->url)) {
                return $route->execute();
            }
        }
        throw new NotFoundException("La page demandée est introuvable");
    }
}
