<?php include '../lib/includes.php';?>
<?php $auth = 1;?>
<?php include '../inc/admin_header.php';

// var_dump($categories);

/**
 * SUPPRESSION
*if(isset($_GET['delete'])){
    *checkCsrf();
    *$id = $db->quote($_GET['delete']);
    *$db->query("DELETE FROM categories WHERE id=$id");
    *setFlash('La catégorie a bien été supprimée');
    *header('Location:'. WEBROOT .'/category.php');
    *die();
*}
*/

/**
 * Mes categories
 */
$select = $db->query('SELECT id, name, slug FROM categories');
$categories = $select->fetchAll();

?>



<div class="container">
    <h2>Les Categories</h2>
    <p><a href="category_edit.php" class="btn btn-success">Ajouter une nouvelle categorie</a></p>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="col">ID</th>
                <th class="col">Nom</th>
                <th class="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category):?>
                <tr>
                    <td><?= $category['id'] ;?></td>
                    <td><?=$category['name'];?></td>
                    <td>
                        <a href="category_edit.php?id=<?= $category['id'];?>" class="btn btn-primary">Editer</a>
                        <a href="?delete=<?= $category['id'] ;?>&<?= csrf();?>" class="btn btn-primary" class="btn btn-error" onclick="return confirm('Suppresion ? ')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php include '../lib/debug.php';?> 
<?php include '../inc/footer.php';?>