<?php

class Providers extends Controllers {
    public function __construct() {
        parent::__construct();
    }

    public function providers() {
        $pageData['page_title'] = 'Proveedores';
        $this -> views -> getView($this, 'providers', $pageData);
    }
}

?>