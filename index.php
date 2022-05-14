<?php

require_once('Libraries/Core/App.php');
$app = new App(!empty($_GET['url']) ? $_GET['url'] : 'home/home');

?>