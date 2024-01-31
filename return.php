<?php
include "conn.php";
?>




<?php

function retorno()
{
	echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=whatch.php'>";
//header("location:whatch.php");
}


$foto=$_FILES['foto']['name'];


$nome=$_POST['nome'];
session_start();
$nome=$_SESSION['nome'];
$pasta="perfil/";
$tipo=".jpg";
$foto2=$nome.$tipo;
$duplo=$pasta.$foto2;
$foto=$_POST['foto'];
//echo $duplo;

if(file_exists($duplo))
{
$sql = "DELETE FROM perfil WHERE foto = '$duplo'";
mysql_query($sql);

unlink($duplo);
	
move_uploaded_file($_FILES['foto']['tmp_name'],$duplo);
mysql_query("INSERT INTO perfil(id,nome,foto)VALUES(NULL,'$nome','$duplo')") or die("Nada enviado");

	header("location:index.php");
	
}
else
{
	move_uploaded_file($_FILES['foto']['tmp_name'],$duplo);
mysql_query("INSERT INTO perfil(id,nome,foto)VALUES(NULL,'$nome','$duplo')") or die("Nada enviado");
header("location:whatch.php");
}
?>

<?php



?>
