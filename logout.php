<?php
/**
 * J'indique que même sans connexion , on peut acceder à cette page
 * j'inclus mes differentes librairies
 * je redirige l'utilisateur
 * voir server si WEBROOT NECESSAIRE5
 */
$auth = 0;
include 'lib/includes.php';
$_SESSION = array();
header('Location:'. WEBROOT .'index.php');
die();