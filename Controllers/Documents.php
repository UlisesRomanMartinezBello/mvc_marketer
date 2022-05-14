<?php

class Documents extends Controllers {
    public function __construct() {
        parent::__construct();
    }

    public function documents() {
        $pageData['page_title'] = 'Documentos';
        $this -> views -> getView($this, 'documents', $pageData);
    }
}

?>