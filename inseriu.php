<?php
require 'conn.php';require 'functions.php';
?>


<?

session_start();
$nomeprime=$_SESSION['nomeget'];

$sql=mysql_query("SELECT*FROM audiencia ORDER BY id");
$rows=mysql_num_rows($sql);
while($exibe=mysql_fetch_array($sql))
{
	$id=$exibe['id'];
$visitou=$exibe['visitou'];
$nome=$exibe['nome'];
}




if($nomeprime==$visitou)
{

mysql_query("update audiencia set nome='$nome', visitou='$visitou' where id='$id'"); 

}
else
{
	
}



?>