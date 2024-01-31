<?php
require 'conn.php';
?>


<?php

session_start();

$nome="encostada";
$sql=mysql_query("select*from cadastros where nome='$nome' LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{	
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $fone=$linha['fone'];
			   

			echo '<a href="editnumber.php?id='.$id.'"><span style="color:#003399;font-size:10pt;font-weight:bold"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a><br><br>';
			
			
			
			

        }    
        
    


?>
