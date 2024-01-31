<?php
require 'conn.php';
?>
<?php

session_start();

$nome=$_SESSION['nome'];
$url="/q.php?nome=$nome";


mysql_query("insert into online(id,url,nome)values(NULL,'$url','$nome')");


?>


