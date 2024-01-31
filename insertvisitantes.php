<?php
include "conn.php";
?>


<?php
session_start();
$nome=$_SESSION['nome'];
$visitante=$_SESSION['nomeget'];
$image=$_SESSION['imageperfil'];


///echo $image;

mysql_query("INSERT INTO visitantes(id,nome,visitante,image)VALUES(NULL,'$nome','$visitante','$image')") or die("Nenhum dado foi inserido na tabela");

        
    


?>


