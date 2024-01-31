<?php
include "conn.php";
?>
<?php



session_start();
$nome=$_SESSION['nome'];
$status=$_POST['status'];





mysql_query("INSERT INTO status(id,nome,status)VALUES(NULL,'$nome','$status')") or die("Nenhum dado foi inserido na tabela");

header('location:whatch.php');


?>