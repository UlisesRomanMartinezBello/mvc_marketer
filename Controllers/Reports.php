<?php

class Reports extends Controllers {
    public function __construct() {
        parent::__construct();
    }

    public function reports() {
        $pageData['page_title'] = 'Reportes';
        $this -> views -> getView($this, 'reports', $pageData);
    }
}

?>