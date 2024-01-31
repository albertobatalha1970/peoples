<?php
include "conn.php";
?>


<?php



$id=$_GET['id'];

mysql_query("delete from album where id='$id'") or die('Nada deletado');

header('location:album.php');



?>