<?php
$host="localhost";
$user="root";
$pass="usbw";
$db="peoples";


$conexao=new mysqli($host,$user,$pass,$db);
//mysql_select_db($db) or die("Erro ao selecionar banco de dados!");

$exibirPerfil="SELECT * FROM perfil";
$resultado=$conexao->query($exibirPerfil);
while($exibe=$resultado->fetch_array(MYSQLI_BOTH))
{
	$nome=$exibe['nome'];
	echo $nome.'<br>';
}

?>



