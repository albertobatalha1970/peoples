<?php
require 'conn.php';
?>

<?

//vermelho
session_start();
$nome=$_SESSION['nome'];
$color="#cc9";
mysql_query("delete from background where nome='$nome'") or die("Nenhuma cor apagada");
mysql_query("INSERT INTO background(id,nome,color)values(NULL,'$nome','$color')")or die("Nada inserido na tabela");

header('location:whatch.php');
?>

