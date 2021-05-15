<?php 
include '../lib/includes.php';
include '../inc/admin_header.php';


if(isset($_POST['name']) && isset($_POST['slug'])){
    $slug = $_POST['slug'];
    if(preg_match('/^[a-z\-0-9]+$/', $slug)){
        $name = $db->quote($_POST['name']);
        $slug = $db->quote($_POST['slug']);
        $db->query("INSERT INTO categories SET name=$name, slug=$slug");
        setFlash('la category a bien été ajouté');
        header('Location:category.php');
        die();
    }else{
        setFlash('le slug n\'est pas valide', 'danger');
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
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
<?php include '../lib/debug.php';?>
<?php include '../inc/footer.php' ;?>