<?php
require 'conn.php';
//require 'functions.php';
//require 'contador.php';

?>



<?
session_start();


$get=$_SESSION['nomeget'];

$titular=$_POST['titular'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$endereco=$_POST['endereco'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];

if($sql=mysql_query("insert into settings(id,get,titular,nome,email,endereco,bairro,cidade,estado) values(NULL,'$get','$titular','$nome','$email','$endereco','$bairro','$cidade','$estado')"))
{
	header('location:settings.php');
}
else
{
	echo 'Nada inserido';
}








?>