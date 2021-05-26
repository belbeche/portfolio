<?php include '../lib/includes.php';?>
<?php include '../inc/admin_header.php';

// var_dump($works);

/**
* SUPPRESSION
*/
if(isset($_GET['delete'])){
    checkCsrf();
    $id = $db->quote($_GET['delete']);
    $db->query("DELETE FROM works WHERE id=$id");
    setFlash('La realisation a bien été supprimée');
    header('Location:'. WEBROOT .'/work.php');
    die();
}

/**
 * Mes realisation / demandes
 */
$select = $db->query('SELECT id, name FROM works');
$works = $select->fetchAll();

?>



<div class="container">
    <h2>Les réalisations</h2>
    <p><a href="work_edit.php" class="btn btn-success">Ajouter une nouvelle realisation</a></p>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th class="col">ID</th>
                <th class="col">Nom</th>
                <th class="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($works as $category):?>
                <tr>
                    <td><?= $category['id'] ;?></td>
                    <td><?=$category['name'];?></td>
                    <td>
                        <a href="work_edit.php?id=<?= $category['id'];?>" class="btn btn-primary">Editer</a>
                        <a href="?delete=<?= $category['id'] ;?>&<?= csrf();?>" class="btn btn-primary" class="btn btn-error" onclick="return confirm('Suppresion ? ')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<?php include '../lib/debug.php';?> 
<?php include '../inc/footer.php';?>