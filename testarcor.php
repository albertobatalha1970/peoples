<?php
require 'conn.php';
?>



<?


function corResult()
{

session_start();
$nome=$_SESSION['nome'];

echo $nome;


$sql=mysql_query("SELECT*FROM background WHERE nome='$nome' order by id DESC");

while($cor=mysql_fetch_array($sql))
{ 
	$id=$cor['id'];
	$nome=$cor['nome'];
	$color=$cor['color'];

	echo $color;

}

}


?>




 </body>
</html>
