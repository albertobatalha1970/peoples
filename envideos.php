<?php
include "conn.php";
?>




<?php




$video=$_FILES['video']['name'];


$nome=$_POST['nome'];
session_start();
$nome=$_SESSION['nome'];
$pasta="videos/";
//$tipo=".wmv";
$video=$_POST['video'];
//$video2=$nome.$tipo;
$duplo=$pasta.$video;

//echo $duplo;


session_start();
$nome=$_SESSION['nome'];

mysql_query("INSERT INTO videos(id,nome,video)VALUES(NULL,'$nome','$duplo')") or die("Nenhum dado foi inserido na tabela");


?>

<?php



?>
