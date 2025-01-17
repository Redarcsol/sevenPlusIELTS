<?php

class Controller
{
    public function view($name, $data = [])
    {
        $filename = "../app/views/".$name.".view.php";
        if(file_exists($filename))
        {
            if (!empty($data)) {
                extract($data); // Extracts array keys as variables
            }
            require $filename;
        }
        else
        {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}