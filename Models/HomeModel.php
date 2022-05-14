<?php

class HomeModel extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function selectUsers() {
        $queryUsers = "SELECT * FROM users";
        $requestUsers = $this -> selectAll($queryUsers);
        return $requestUsers;
    }
}

?>