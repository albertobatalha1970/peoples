<?php
require 'conn.php';
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>logout</title>
 </head>
 <body>
  <?php
session_start();
$nome=$_SESSION['nome'];

mysql_query("delete from online where nome='$nome'") or die("Nenhuma cor apagada");
  //unset($_SESSION['nome']);
	//unset($_SESSION['senha']);
	session_destroy();
  header('location:index.php');

?>



 </body>
</html>
