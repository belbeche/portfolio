<?php

$dsn = 'mysql:host=localhost;dbname=portfolio';
$user = 'root';
$pass = 'root';

try {
    $dbh = new PDO($dsn, $user, $pass);
    // echo 'Connexion OK';
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Echec de connexion : '. $e->getMessage();
    die();
}
?>