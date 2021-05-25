<?php 
include '../lib/includes.php';
include '../inc/admin_header.php';

/**
 * Ajout / Modifications
 */
if(isset($_POST['name']) && isset($_POST['slug'])){
    $slug = $_POST['slug'];
    if(preg_match('/^[a-z\-0-9]+$/', $slug)){
        checkCsrf();
        $name = $db->quote($_POST['name']);
        $slug = $db->quote($_POST['slug']); 
        if(isset($_GET['id'])){
            $id = $db->quote($_GET['id']);
            $db->query("UPDATE categories SET name=$name, slug=$slug, WHERE id=$id");
            setFlash('la category a bien été modifiée');
            header('Location:category.php');
            die();
        }else{
            $db->query("INSERT INTO categories SET name=$name, slug=$slug");
            setFlash('la category a bien été ajoutée');
            header('Location:category.php');
            die();
        }
    }else{
        header('Location:category.php');
        die();
        setFlash('le slug n\'est pas valide', 'danger');
    }
}

/**
 * Vérifications contenus , si je récupère j'affiche
 * si id vaut 0 ( false ) redirect homepage
 * sinon je recupère les informations propre à l'id
 */

if(isset($_GET['id'])){
    $id = $db->quote($_GET['id']);
    $select = $db->query("SELECT * FROM categories WHERE id=$id");
    if($select->rowCount() == 0){
        setFlash('Categorie inexsistante', 'danger');
        header('Location:'.WEBROOT.'category.php');
        die();
    }else{
        $_POST = $select->fetch();
    }
}

?>
<div class="container">
    <h1>Editer une catégorie</h1>
    <form action="" method="POST">
        <div class="form-group">
        <label for="name">Nom de la catégorie</label>
            <?= input('name'); ?>
        </div>
        <div class="form-group">
        <label for="slug">URL de la catégorie</label>
            <?= input('slug'); ?>
        </div>
        <?= csrfInput() ;?>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
<?php include '../lib/debug.php';?>
<?php include '../inc/footer.php' ;?>