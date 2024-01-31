<?php
include "conn.php";
?>
<?php

$var = "<script>javascript:history.back(-1)</script>";
session_start();
$nome=$_SESSION['nome'];
$coments=$_POST['coments'];
$mandante=$_POST['mandante'];

mysql_query("INSERT INTO comentar(id,nome,mandante,coments)VALUES(NULL,'$nome','$mandante','$coments')") or die("Nenhum dado foi inserido na tabela");
echo $var;

?>