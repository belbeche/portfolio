<?php

$dsn = 'mysql:host=localhost;dbname=portfolio';
$user = 'root';
$pass = '';

try {
    $db = new PDO($dsn, $user, $pass);
    // echo 'Connexion OK';
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
    echo 'Echec de connexion : ';
    echo $e->getMessage();
    die();
}
?>