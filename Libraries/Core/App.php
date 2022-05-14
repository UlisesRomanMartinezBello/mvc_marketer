<?php

require_once('config/Config.php');
require_once('Helpers/Helpers.php');

class App {

    public $route;

    public function __construct(string $url) {
        $this -> route = $url;
        $splitRoute = explode('/', $this -> route);
        $controller = $splitRoute[0];
        $method = $splitRoute[0];
        $params = "";

        // Get the method
        if(!empty($splitRoute[1])) {
            if($splitRoute[1] != '') {
                $method = $splitRoute[1];
            }
        }

        // Get the params
        if(!empty($splitRoute[2])) {
            if($splitRoute[2] != '') {
                for ($i=2; $i < count($splitRoute); $i++) { 
                    $params .= $splitRoute[$i] . ','; 
                }
                $params = trim($params, ',');
            }
        }

        require_once('Libraries/Core/Autoload.php');
        require_once('Libraries/Core/Load.php');

    }
}