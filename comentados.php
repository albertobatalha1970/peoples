<?php
require 'conn.php';
?>
<?php

session_start();

$comentou=$_SESSION['nome'];
$comentado=$_SESSION['nomeget'];
$comentario=$_POST['comentario'];


//comentou=$_SESSION['nome'];
//$comentado=$_SESSION['nomeget'];


$imgcomentou='perfil/'.$comentou.'.jpg';
$imgcomentado='perfil/'.$comentado.'.jpg';
$hora=$_POST['data'];
$data=$_POST['hora'];




mysql_query("insert into comentados(id,comentou,imgcomentou,comentado,imgcomentado,comentario,data,hora) values(NULL,'$comentou','$imgcomentou','$comentado','$imgcomentado','$comentario','$data','$hora')");

header('location:whatch.php');


//$url="/q.php?nome=$nome";

//mysql_query("insert into visitantes(id,url,nome) values(NULL,'$url','$nome'");

?>


