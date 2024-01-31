<?php
include "conn.php";
?>
<head>


</head>
<?php

session_start();
$comparativo=$_SESSION['userget'];
$nome=$_SESSION['nome'];
$figura=$_SESSION['image_perfil'];
$visitantea=$_SESSION['nomeget'];
$figura=$_SESSION['image_perfil'];
$ids=$_SESSION['id'];



//mysql_query("insert into visitantes(id,nome,visitante) value(null,'$nome','$visitante')");
		




$sql=mysql_query("select*from visitantes where nome='$nome'");
while($exibe=mysql_fetch_array($sql))
{
	$id=$exibe['id'];
	$nome=$exibe['nome'];
	$visitante=$exibe['visitante'];
}

if($comparativo<>$visitante)
{
	
	mysql_query("insert into visitantes(id,nome,visitou)values(null,'$nome','$visitantea')");
}


else
{mysql_query("DELETE FROM visitantes WHERE nome='$nome'");
mysql_query("UPDATE visitantes SET nome='$nome', visitou='$visitantea' where id='$ids'");
}





?>

?>


