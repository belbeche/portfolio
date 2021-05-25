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

function csrfInput(){
    return '<input type="hidden" value="'.$_SESSION['csrf'].'" name="csrf">';
}

/**
 * Je vérifie si mon token correspendant à la session enregistré
 * sinon je redirige vers la page du token
 */

function checkCsrf(){
    $session = $_SESSION['csrf'];
    if(
        (isset($session) && $session == $session) ||
        (isset($_GET['csrf']) && $_GET['csrf'] == $session)
        ){
        return true;
    }else
    header('Location:csrf.php');
    die();
}

?>