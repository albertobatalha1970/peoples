<?php
include "conn.php";
?>
<?php

//$var = "<script>javascript:history.back(-1)</script>";


$nome=$_POST['nome'];
$url=$_POST['url'];
$foto=$_POST['foto'];





mysql_query("INSERT INTO amigos(id,nome,url,foto)VALUES(NULL,'$nome','$url','$foto')") or die("Nenhum dado foi inserido na tabela");

header('location:whatch.php'); 


//echo $var;

?>