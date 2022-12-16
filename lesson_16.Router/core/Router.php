<?php

class Router
{
    //constuct create step 1 
    protected $routes = [];

    public static function load($file)
    {
        $router = new static;
         
        require $file;

        return $router;
    }

    //step 2
    public function define($routes)
    {
        // step 3 done
        $this->routes = $routes;
        
    }
    
    public function direct($uri)
    {
        var_dump($uri);
        if(array_key_exists($uri, $this->routes))
        {
            return $this->routes[$uri]; 
        }
 
        throw new Exception('No route define for this URI.');
    }
}