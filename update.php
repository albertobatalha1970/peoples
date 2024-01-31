<?php

include "conn.php";
?>
<head>


</head>
<?php


//$var = "<script>javascript:history.back(-2)</script>";

$foto=$_FILES['foto']['name'];


$nome=$_POST['nome'];
session_start();
$nome=$_SESSION['nome'];
$pasta="perfil/";
$tipo=".jpg";
$foto2=$nome.$tipo;
$duplo2=$pasta.$nome;
$duplo=$pasta.$foto2;
$foto=$_POST['foto'];


if(file_exists($duplo))
{
mysql_query("DELETE*FROM perfil where nome='$nome'");
unlink($duplo);
move_uploaded_file($_FILES['foto']['tmp_name'],$duplo2);
header("location:whatch.php");
//echo "<script>loginsucessfully();</script>";
header("location:whatch.php");
}

?>

<?php



?>
