<?php

require 'conn.php';
require 'functions.php';


?>


<?php
session_start();

$nome=$_SESSION['nomeget'];
$titular=$nome;

echo $nome;

$sql=mysql_query("select*from settings where titular='$titular'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   
			   echo $nome.'<br>';
	 }
?>