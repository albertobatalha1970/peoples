<?php
include "conn.php";
//unlink($duplo);
?>




<?php

function retorno()
{
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=update2.php'>";
//header("location:whatch.php");
}


$foto=$_FILES['foto']['name'];


$nome=$_POST['nome'];
session_start();
$nome=$_SESSION['nome'];
$pasta="perfil/";
$tipo=".jpg";
$foto2=$nome.$tipo;
$duplo=$pasta.$foto2;
$duplo2=$pasta.$foto;
$foto="img/perfil.jpg";


if(file_exists($duplo))
{
unlink($duplo or $duplo2);
$sql = "DELETE FROM perfil WHERE foto = '$duplo2'";
mysql_query($sql);

move_uploaded_file($_FILES['foto']['tmp_name'],$duplo);
$sql="UPDATE perfil SET where foto='$duplo'";
mysql_query($sql);
//echo $duplo;
header("location:whatch.php");
}


else
{

}
?>

<?php



?>
