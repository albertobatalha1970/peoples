<?php
require 'conn.php';
require 'functions.php';
?>





<?php




$foto=$_FILES['foto']['name'];


$nome=$_POST['nome'];
session_start();
$nome=$_SESSION['nome'];
$pasta="capa/";
$tipo=".jpg";
$foto2=$nome.$tipo;
$duplo=$pasta.$foto2;
$imagecapa=$_POST['foto'];

echo $imagecapa;



mysql_query("DELETE*FROM capa where nome='$nome'");
unlink($duplo);
move_uploaded_file($_FILES['imagecapa']['tmp_name'],$duplo);
mysql_query("INSERT INTO capa(id,nome,imagecapa) values(NULL,'$nome','$duplo')") or die("Nada feito");
header("location:whatch.php");


?>

<!--/////////////////////////////-->



