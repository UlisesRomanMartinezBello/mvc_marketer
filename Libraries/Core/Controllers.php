<?php

class Controllers {
    public function __construct() {
        $this -> views = new Views();
        $this -> loadModels();
    }

    public function loadModels() {
        $model = get_class($this)."Model";
        $routeClass = "Models/" . $model . ".php";
        if(file_exists($routeClass)) {
            require_once($routeClass);
            $this -> model = new $model();
        }
    }
}

?>