<?php 
session_start();
/**
 * Je vérifie si la session existe , si oui , je redirige vers la page 
 */
if(!isset($auth)){
    if(!isset($_SESSION['Auth']['id'])){
        header('Location:'. WEBROOT .'login.php' );
        die();
    }
}

if(!isset($_SESSION['csrf'])){
    $_SESSION['csrf'] = md5(time() + rand());
}


function csrf(){
    return 'csrf='.$_SESSION['csrf'];
}

/**
 * Je vérifie si mon token correspendant à la session enregistré
 * sinon je redirige vers la page du token
 */

function checkCsrf(){
    $session = $_SESSION['csrf'];
    $getCsrf = $_GET['csrf'];
    if(!isset($session) || $getCsrf != $session) {
        header('Location:'. WEBROOT .'/csrf.php');
        die();
    }
}

?>