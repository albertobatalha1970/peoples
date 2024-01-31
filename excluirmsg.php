<?php
include "conn.php";
?>




<?php
$id=$_GET['id'];



mysql_query("delete from comentar where id='".$id."'");


header("location:whatch.php");

//}
?>

