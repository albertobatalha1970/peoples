<?php
include "conn.php";
?>


<!doctype html>
<html lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="Generator" content="EditPlus�">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <style>html,body{margin:0px !important;}</style>
  <title>RSocial</title>
<link rel="stylesheet" type="text/css" href="style/estilo.css">
</head>
 <body bgcolor="">




<?php



$id=$_GET["id"];
$sql=mysql_query("DELETE FROM amigos where id='$id'");


if($sql)
{
	header('location:editfriends.php');
}
else
{
	echo "Id ".$id." N�o pagado";
	//header('location:editfriends.php');
}


?>








</body>
</html>