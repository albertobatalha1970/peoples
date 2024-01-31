<?php
require 'conn.php';
//require 'functions.php';
?>

<?

session_start();

$main=$_SESSION['main'];
$visitou=$_SESSION['userget'];
$nomevisitado=$_SESSION['visitou'];
echo '<a href="q.php?nome='.$visitou.'">Visitado: '.$nomevisitado.'</a>';
echo '<br>Principal: '.$main;

?>


<br><br>

<?php

$sql=mysql_query("select*from audiencia order by nome");
while($exibe=mysql_fetch_array($sql))
{
	$nome=$exibe['nome'];
	$visitou=$exibe['visitou'];
	echo $visitou;
	echo '<br>';
}

?>






