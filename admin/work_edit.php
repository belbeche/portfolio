<?php 
include '../lib/includes.php';
include '../inc/admin_header.php';

/**
 * Ajout / Modifications
 */
if(isset($_POST['name']) && isset($_POST['content']) && isset($_POST['category_id'])  && isset($_POST['slug'])){
    $slug = $_POST['slug'];
    if(preg_match('/^[a-z\-0-9]+$/', $category_id)){
        checkCsrf();
        $name = $db->quote($_POST['name']);
        $content = $db->quote($_POST['content']);
        $category_id = $db->quote($_POST['category_id']);
        $slug = $db->quote($slug);
        if(isset($_GET['id'])){
            $id = $db->quote($_GET['id']);
            $db->query("UPDATE works SET name=$name,  content=$content, category_id=$category_id, slug=$slug WHERE id=$id");
            setFlash('la realisation a bien été modifiée');
            header('Location:work.php');
            die();
        }else{
            $db->query("INSERT INTO works SET name=$name, content=$content, category_id=$category_id, slug=$slug");
            setFlash('la publication a bien été ajoutée');
            header('Location:work.php');
            die();
        }
    }else{
        header('Location:work.php');
        die();
        setFlash('le category_id n\'est pas valide', 'danger');
    }
}

/**
 * Update relisation
 */

if(isset($_GET['id'])){
    $id = $db->quote($_GET['id']);
    $select = $db->query("SELECT * FROM works WHERE id=$id");
    if($select->rowCount() == 0){
        setFlash('Publication inexsistante', 'danger');
        header('Location:work.php');
        die();
    }else{
        $_POST = $select->fetch();
    }
}

$select = $db->query('SELECT id, name FROM categories ORDER BY name ASC');
$categories = $select->fetchAll();
$categories_list = array();
foreach ($categories as $category) {
    $categories_list[$category['id']] = $category['name'];
}
// var_dump($categories_list);
?>
<div class="container">
    <h1>Editer une publication</h1>
    <form action="" method="POST">
        <div class="form-group">
        <label for="name">Nom de la publication</label>
            <?= input('name'); ?>
        </div>
        <div class="form-group">
        <label for="content">Contenu de la publication</label>
            <?= textarea('content'); ?>
        </div>
        <div class="form-group">
        <label for="category_id">Categorie de la publication</label>
            <?= select('category_id', $categories_list); ?>
        </div>
        <div class="form-group">
        <label for="slug">Url de la publication</label>
            <?= input('slug'); ?>
        </div>
        <?= csrfInput() ;?>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
<?php include '../lib/debug.php';?>
<?php include '../inc/footer.php' ;?>

?>

<?php ob_start(); ?>

<script src="https://cdn.tiny.cloud/1/0gsi5obt0wqdiwaeotx1u8ch5yosxg86prh914f7dofh3jyu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>
    

<?php $script = ob_get_clean(); ?>


<?php if(isset($script)): ?><?= $script ?><?php endif;?>



