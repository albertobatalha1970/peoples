<?php
include "conn.php";
?>


<?php



$id=$_GET['id'];

mysql_query("delete from cadproduct where id='$id'") or die('Nada deletado');

header('location:whatch.php');



?>