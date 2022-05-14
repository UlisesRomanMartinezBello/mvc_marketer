<?php

class UsersModel extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function selectUsers() {
        $queryUsers = "SELECT iduser, user, name, email, typeuser FROM users ORDER BY iduser DESC";
        $requestUsers = $this -> selectAll($queryUsers);
        return $requestUsers;
    }
}

?>