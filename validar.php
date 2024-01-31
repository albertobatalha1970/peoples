<?php
include "conn.php";
?>


<!doctype html>
<html lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <style>html,body{margin:0px !important;}</style>
  <title>Samambaia Auto Posto</title>
<link rel="stylesheet" type="text/css" href="style/estilo.css">
</head>
 <body bgcolor="">




<?php
$foto=$_FILES['foto']['name'];
$pasta="fotos/";
$duplo=$pasta.$foto;
$nome=$_POST['nome'];
$fone=$_POST['fone'];


if(move_uploaded_file($_FILES['foto']['tmp_name'],$duplo))
{
mysql_query("INSERT INTO cadastros(id,nome,fone,foto)VALUES(NULL,'$nome','$fone','$duplo')") or die("Nenhum dado foi inserido na tabela");
header("location:index.php");
}
else
{
	header("location:index.php");
}




?>








</body>
</html>