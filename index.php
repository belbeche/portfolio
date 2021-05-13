<?php include 'lib/db.php';?>
<?php include 'inc/header.php';?>

<h1>Portfolio</h1>

<?php 

$select = $dbh->query('SELECT * FROM users');

var_dump($select->fetch());

?>

<?php include 'inc/footer.php';?>