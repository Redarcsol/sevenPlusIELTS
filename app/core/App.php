<?php

class App
{
   private $controller = "Home";
   private $method = "index";
    private function splitUrl()
    {
        $url = $_GET['url'] ?? 'home';
        return explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));

    }


    public function loadController()
    {
        $URL = $this->splitUrl();
        
        $filename = "../app/controllers/".ucfirst($URL[0]).".php";
        if(file_exists($filename))
        {
            require $filename;
            $this->controller = ucfirst($URL[0]);
        }
        else
        {
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = "_404";
        }
        
        $controller = new $this->controller;
        
        if (empty($URL[1])) {
            // No method provided, default to index
            $this->method = 'index';
        } else if (method_exists($controller, $URL[1])) {
            // Provided method exists
            $this->method = $URL[1];
        } else {
            // Provided method does not exist, use 404 controller
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = "_404";
            $controller = new $this->controller;
            $this->method = 'index';  // Assuming index method in _404 controller
        }
        
        call_user_func_array([$controller, $this->method], []);
    }
    
    


    

}

