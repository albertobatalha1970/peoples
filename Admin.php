<?php
require 'conn.php';
//require 'functions.php';
//require 'contador.php';

?>

<?
//session_start();
$comentado=$_SESSION['nome'];

//$nome=$_GET['nome'];




//echo $titular;
//$titular='fernanda';






$sql=mysql_query("select*from comentados where comentado='$comentado' order by id DESC");
while($linha=mysql_fetch_array($sql))
{
			   

			   $id=$linha['id'];
		       $comentou=$linha['comentou'];
			   $comentado=$linha['comentado'];
			   $imgcomentou=$linha['imgcomentou'];
			   $imgcomentado=$linha['imgcomentou'];
			   $comentario=$linha['comentario'];
			   $data=$linha['data'];
			   $hora=$linha['hora'];
			  
			   $nome=$comentou;
			
			echo '<a style="text-decoration:none" href="q.php?nome='.$nome.'"><img width="80" src="'.$imgcomentado.'" align="left" style="margin-right:3px">';
			
			    echo '<span style="color:#003399;font-size:11pt;font-weight:none;text-decoration:none">'.ucwords($comentou).'&nbsp;comentou:<br><br></font></a>';
				
				echo '<span style="padding:2px;color:#0066ff;font-size:10pt;font-weight:none;text-decoration:none">';
				
				echo $comentario;
				echo '<br></span>';
				echo '<span style="color:#9191ff;font-size:8pt;font-weight:none;text-decoration:none">';
				echo $hora.' / as '.$data;
				echo '</span><br><br><br>';


				//echo $comentario.'<br>';
				
				}    
















/*$id=8;
$sql=mysql_query("select*from settings where titular='$titular'");
while($exibe=mysql_fetch_array($sql))
{
	$id=$exibe['id'];
	$nome=$exibe['nome'];
	$email=$exibe['email'];
	$endereco=$exibe['endereco'];
	$bairro=$exibe['bairro'];
	$cidade=$exibe['cidade'];
	$estado=$exibe['estado'];






	echo $nome;
	echo '<br>';
	echo $email;
	echo '<br>';
	echo $endereco;
	echo '<br>';
	echo $bairro;
	echo '<br>';
	echo $cidade;
	echo '<br>';
	echo $estado;
}


*/



?>