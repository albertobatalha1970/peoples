<?php
include "conn.php";
?>


<?php

session_start();
$var = "<script>javascript:history.back(-1)</script>";

$foto=$_FILES['foto']['name'];
$pasta="albuns/";
$duplo=$pasta.$foto;
$nome=$_SESSION['nome'];
$foto=$_POST['foto'];


if(move_uploaded_file($_FILES['foto']['tmp_name'],$duplo))
{
mysql_query("INSERT INTO album(id,nome,foto)VALUES(NULL,'$nome','$duplo')") or die("Nenhum dado foi inserido na tabela");
header('location:album.php');
//echo $var = "<script>javascript:history.back(-1)</script>";
}
else
{
	header('location:album.php');
}




?>
