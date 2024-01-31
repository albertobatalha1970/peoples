<?php
include "conn.php";
?>
<head>


</head>
<?php






session_start();

$nome=$_SESSION['nomeget'];
$visitante=$_SESSION['nome'];




if($nome==true)
{
	mysql_query("insert into visitantes(id,nome,visitante) value(null,'$nome','$visitante')");
	echo 'Informações inseridas com sucesso';
	echo '<br>';

	echo $nome;
	echo '<br>';
	echo $visitante;

}
else
{
	echo 'Nada inserido no sistema';
}

?>

<?php



?>
