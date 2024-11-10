<?php

$db_host = "";
$db_name = "";
$db_user = "";
$db_pass = "";

try {
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user, $db_pass);
} catch (Exception $e) {
    die('Database error : ' . $e->getMessage());
}

?>