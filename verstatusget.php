<?php
include "conn.php";
?>
<?php

session_start();

$nome=$_SESSION['nomeget'];
$sql=mysql_query("select*from status where nome='$nome' order by id DESC LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $status=$linha['status'];
			   

			
			


			echo '<span style="color:#4a4a4a;font-size:10pt;font-weight:none">';
			echo $status.'<br></span>';
			echo '</span>';

        }    
        
    


?>