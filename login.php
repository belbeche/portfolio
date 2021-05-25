<?php 
$auth = 0;
/**
 * inclusion des scripts
 */
include 'lib/includes.php';


/**
 * je vérifie si l'utisateur existe, je test ses valeurs , et récupère un boolean
 * si oui , je redirige vers la page d'accueil
 * sinon j'invite à la connexion
 */

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $db->quote($_POST['username']);
    $password = sha1($_POST['password']);
    // var_dump($sql);
    $select = $db->query("SELECT * FROM users WHERE username = $username AND password='$password'");
    if($select->rowCount() > 0){
        $_SESSION['Auth'] = $select->fetch();
        setFlash('Connecté sous le nom de : '. $_SESSION['Auth']['username']);
        header('Location:'. WEBROOT .'index.php');
        die();
    }
}
?>
<?php
/**
 * Inclusion du header
 */
include 'inc/header.php';
/**
 * Connexion utilisateur
 */
?>
<div class="container">
    <form action="" method="POST">
        <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
            <?= input('username'); ?>
        </div>
        <div class="form-group">
        <label for="password">Mot de passe</label>
            <label for="password"> Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>

<?php include 'inc/footer.php';?>