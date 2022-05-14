<?php

// Return URL Prefix
function urlPrefix($url = '') {
    return URL_PREFIX . $url;
}

// Format Arrays
function formatJSON(array $data) {
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

// Functions for Layout
function headerLayout($pageData = '') {
    $viewHeader = 'Views/Layout/Header.php';
    require_once($viewHeader);
}

function footerLayout($pageData = '') {
    $viewFooter = 'Views/Layout/Footer.php';
    require_once($viewFooter);
}

function getModal($nameModal, $dataModal) {
    $viewModal = "Views/Layout/Modals/{$nameModal}.php";
    require_once($viewModal);
}

// Clean String
function strClean($strCadena){
    $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
    $string = trim($string);
    $string = stripslashes($string);
    $string = str_ireplace("<script>","",$string);
    $string = str_ireplace("</script>","",$string);
    $string = str_ireplace("<script src>","",$string);
    $string = str_ireplace("<script type=>","",$string);
    $string = str_ireplace("SELECT * FROM","",$string);
    $string = str_ireplace("DELETE FROM","",$string);
    $string = str_ireplace("INSERT INTO","",$string);
    $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
    $string = str_ireplace("DROP TABLE","",$string);
    $string = str_ireplace("OR '1'='1","",$string);
    $string = str_ireplace('OR "1"="1"',"",$string);
    $string = str_ireplace('OR ´1´=´1´',"",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("LIKE '","",$string);
    $string = str_ireplace('LIKE "',"",$string);
    $string = str_ireplace("LIKE ´","",$string);
    $string = str_ireplace("OR 'a'='a","",$string);
    $string = str_ireplace('OR "a"="a',"",$string);
    $string = str_ireplace("OR ´a´=´a","",$string);
    $string = str_ireplace("OR ´a´=´a","",$string);
    $string = str_ireplace("--","",$string);
    $string = str_ireplace("^","",$string);
    $string = str_ireplace("[","",$string);
    $string = str_ireplace("]","",$string);
    $string = str_ireplace("==","",$string);
    return $string;
}

// Generate a password
function passGenerator($length = 10) {
    $password = "";
    $lenghtPassword = $length;
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $lenghtString = strlen($characters);

    for($i = 1; $i <= $lenghtPassword; $i++) {
        $position = rand(0, $lenghtString - 1);
        $password .= substr($characters, $position, 1);
    }
    return $password;
}

// Create a token
function token() {
    $r1 = bin2hex(random_bytes(10));
    $r2 = bin2hex(random_bytes(10));
    $r3 = bin2hex(random_bytes(10));
    $r4 = bin2hex(random_bytes(10));
    $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
    return $token;
}

?>