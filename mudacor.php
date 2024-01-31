<?php
require 'conn.php';
?>

<?


$cor="#ff0000";
mysql_query("insert into background(id,nome,cor)values(NULL,'$nome','$cor')")or die("Nada inserido na tabela");


?>