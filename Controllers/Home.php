<?php

class Home extends Controllers {
    public function __construct() {
        parent::__construct();
    }

    public function home() {
        $pageData['page_title'] = 'Home';
        $this -> views -> getView($this, 'home', $pageData);
    }

    public function providersContacted() {

    }

    public function uploadedFiles() {
        
    }
}

?>