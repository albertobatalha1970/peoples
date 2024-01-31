<?php
include "conn.php";
include "session.php";
?>
<?php

$var = "<script>javascript:history.back(-1)</script>";
session_start();
$nome=$_SESSION['nome'];
$coments=$_POST['coments'];
$data=$_POST['data'];
$hora=date("H:i:s");

mysql_query("INSERT INTO comentar(id,nome,coments,data,hora)VALUES(NULL,'$nome','$coments','$data','$hora')") or die("Nenhum dado foi inserido na tabela");
//echo $var;
header("location:whatch.php");

?>