<?php
include "conn.php";
?>



<?php
$nome="Alberto";
$sql=mysql_query("select*from comentar where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $coments=$linha['coments'];
        


			

            
			echo 'Nome:&nbsp;<span style="color:#ff0000;font-size:10pt;font-weight:bold"><br>';
			
			echo $nome.'</span><br>';


			echo 'Nome:&nbsp;<span style="color:#ff0000;font-size:10pt;font-weight:bold"><br>';
			
			echo $coments.'</span><br><br>';


        }    
        
    


?>

