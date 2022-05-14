<?php

// Require files from libs folder
spl_autoload_register(function($className) {
    if (file_exists('Libraries/Core/' . $className . '.php')) {
        require_once('Libraries/Core/' . $className . '.php');
    }
});

?>