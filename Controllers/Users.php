<?php

class Users extends Controllers {
    public function __construct() {
        parent::__construct();
    }

    public function users() {
        $pageData['page_title'] = 'Administrar Usuarios';
        $this -> views -> getView($this, 'users', $pageData);
    }

    public function getUsers() {
        $users = $this -> model -> selectUsers();
        for ($i=0; $i < count($users); $i++) {
            switch ($users[$i]['typeuser']) {
                case 1:
                    $users[$i]['typeuser'] = 'Usuario';
                    break;
                case 2:
                    $users[$i]['typeuser'] = 'Administrador';
                    break;
                case 3:
                    $users[$i]['typeuser'] = 'Usuario restringido';
                    break;
                default:
                    $users[$i]['typeuser'] = 'Desconocido';
                    break;
            }
            
            $users[$i]['options'] = "<div class='btn-group'>
            <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#users-modal'>
            <i class='fas fa-user-edit'></i></button><button type='button' class='btn btn-danger'><i class='fas fa-user-times'></i></button></div>";
        }
        print_r(json_encode($users, true));
    }
}
