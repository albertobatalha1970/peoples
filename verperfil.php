<?php
require 'conn.php';
//require 'functions.php';
//require 'contador.php';

?>

<?
//session_start();
$titular=$_SESSION['nomeget'];
$pasta="img/";
$tipo=".jpg";
$img=$pasta.$titular.$tipo;



//echo $titular;
//$titular='fernanda';

//$id=8;



$sql=mysql_query("select*from settings where titular='$titular'");
$rows=mysql_num_rows($sql);

if($rows<1)
	
	{
	echo '<span style="color:#003399;font-size:12pt;font-weight:bold">'.ucwords($titular).'</span>&nbsp;ainda n�o adicionou dados pessoais ao seu perfil';
	}
	else
	{
while($exibe=mysql_fetch_array($sql))
{
	$id=$exibe['id'];
	$nome=$exibe['nome'];
	$email=$exibe['email'];
	$endereco=$exibe['endereco'];
	$bairro=$exibe['bairro'];
	$cidade=$exibe['cidade'];
	$estado=$exibe['estado'];


	echo '<span style="color:#003399;font-size:14pt;font-weight:none">Voc� est� vendo o perfil pessoal de @'.ucwords($_SESSION['nomeget']).'</span>';

	echo '<br>';
	echo '<br>';
	echo '<span style="color:#003399;font-size:12pt;font-weight:none">Nome:&nbsp;&nbsp;</span><br>'.$nome;
	echo '<br><br>';
	echo '<span style="color:#003399;font-size:12pt;font-weight:none">Email:&nbsp;&nbsp;</span><br>'.$email;
	echo '<br><br>';
	echo '<span style="color:#003399;font-size:12pt;font-weight:none">Endere�o: &nbsp;&nbsp;</span><br>'.$endereco;
	echo '<br><br>';
	echo '<span style="color:#003399;font-size:12pt;font-weight:none">Bairro: &nbsp;&nbsp;</span><br>'.$bairro;
	echo '<br><br>';
	echo '<span style="color:#003399;font-size:12pt;font-weight:none">Cidade: &nbsp;&nbsp;</span><br>'.$cidade;
	echo '<br><br>';
	echo '<span style="color:#003399;font-size:12pt;font-weight:none">Estado:&nbsp;&nbsp; </span><br>'.$estado;

	}}





//echo $img;


?>