<?php
include "conn.php";
?>
<head>


</head>
<?php


function visitas(){
session_start();
$nome=$_SESSION['nomeget'];
$visitante=$_SESSION['nome'];
if($nome==true)
{
	mysql_query("insert into visitantes(id,nome,visitante) value(null,'$nome','$visitante')");
	echo 'Informação inserida com sucesso';
}
else
{
	echo 'Nada inserido no sistema';
}

}
?>
