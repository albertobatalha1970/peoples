<?php
include "conn.php";
?>
<?php

$var = "<script>javascript:history.back(-2)</script>";
session_start();
$nome=$_SESSION['nome'];
$nameproduto=$_POST['nameproduto'];
$preco=$_POST['preco'];
$descricao=$_POST['descricao'];
$data=date("d - m - Y");
$hora=date("H:i:s");


//move upload

$foto=$_FILES['foto']['name'];
$pasta="publicidade/";
$duplo=$pasta.$foto;
//echo $duplo;

move_uploaded_file($_FILES['foto']['tmp_name'],$duplo);



mysql_query("INSERT INTO cadproduct(id,nome,nameproduto,preco,descricao,data,hora,image)VALUES(NULL,'$nome','$nameproduto','$preco','$descricao','$data','$hora','$duplo')") or die("Nenhum dado foi inserido na tabela");


header("location:whatch.php");

//echo $var;

?>