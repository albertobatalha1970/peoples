<?php
include "conn.php";
?>



<?php
session_start();
$nome=$_SESSION['nome'];
$visitante=$_SESSION['nomeget'];



$nome=$_SESSION['nome'];
$sql=mysql_query("select*from visitantes where nome='$nome' order by id DESC");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $visitante=$linha['visitante'];

			   

            echo '<span style="color:#cc6633;font-size:10pt;font-weight:none"><br>'.ucfirst(strtolower($nome)).'</span><br><br>';
			
			
			
			
		}
			?>