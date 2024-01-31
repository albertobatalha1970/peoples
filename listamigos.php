<?php
include "conn.php";
?>



<?php


//$nome=$_GET['nome'];



session_start();

$nome=$_SESSION['nome'];
$rows=mysql_num_rows($sql);
$sql=mysql_query("select*from amigos where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $url=$linha['url'];
			   $foto=$linha['foto'];

			   $crop=substr($url, 12);

               echo '<a href="'.$url.'" style="text-decoration:none"><img src="perfil/amigos.jpg" width="10" height="10">'.$crop.'</a>&nbsp;';
			
			

        }    
        
			

?>