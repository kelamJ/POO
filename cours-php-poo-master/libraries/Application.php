<?php

class Application 
{
    public function process()
    {
        $controllerName = "Article";
        $task = "index";

        $controllerName = "\Controllers\\" . $controllerName;

        $controller = new $controllerName();
        $controller->$task();
    }
}