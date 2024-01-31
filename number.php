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
  <title>RSocial</title>
<link rel="stylesheet" type="text/css" href="style/estilo.css">
</head>
 <body bgcolor="">




<?php



session_start();

$nome=$_POST['nome'];
$SESSION['nome']=$nome;
$fone=$_POST['fone'];
$senha=$_POST['senha'];


mysql_query("INSERT INTO cadastros(id,nome,fone,senha)VALUES(NULL,'$nome','$fone','$senha')") or die("Nenhum dado foi inserido na tabela");


$duplo='perfil/'.$nome.'.jpg.';
$sql = "DELETE FROM perfil WHERE foto = '$duplo'";
mysql_query($sql);
unlink($duplo);
mysql_query("INSERT INTO perfil(id,nome,foto)VALUES(NULL,'$nome','$duplo')") or die("Nada enviado");
header("location:index.php");



?>








</body>
</html>