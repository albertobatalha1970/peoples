<?php
include "conn.php";
?>




<?php
//$id=$_GET['id'];
$nome=$_GET['nome'];
$coments=$_GET['coments'];
$data=date("d - m - Y");
$hora=date("h:i:s");



//echo $id;
//echo '<br>';
//echo $nome;
//echo '<br>';
//echo $coments;


mysql_query("INSERT INTO comentar(id,nome,coments,data,hora)VALUES(NULL,'$nome','$coments','$data','$hora')") or die("Nenhum dado foi inserido na tabela");
header("location:whatch.php");

/*
if(mysql_query("update comentarios set coments='$coments'"))

{
header("location:whatch.php");
}
else
{
	echo "Vc n�o compartilhou nada, desta vez!";
}

//}
*/
?>

