<?php
require 'conn.php';
require 'functions.php';
?>

<?php
session_start();

$nome=$_SESSION['nome'];
$rows=mysql_num_rows($sql);
$sql=mysql_query("select*from cadproduct where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $image=$linha['image'];
			   $preco=$linha['preco'];
			   
			   $crop=substr($url, 12);
			   $foto2=$image;
				
			echo '<a href="mybusiness.php?nome='.$nome.'" style="text-decoration:none;margin-left:1px;margin-top:4px"><img alt="#" src="'.$foto2.'" width="97" style="margin-left:5px;color:#000000"><span style="font-size:8pt"><br>';

			echo '<span style="font-size:8pt;color:#ff0000">&nbsp;&nbsp;'.$preco.'</span></a><br>';
	}    
?>