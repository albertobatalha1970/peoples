<?php
require 'conn.php';

?>
<br>
<?php
session_start();

$nome=$_SESSION['nome'];
$rows=mysql_num_rows($sql);
$sql=mysql_query("select*from cadproduct order by id");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $image=$linha['image'];
			   $preco=$linha['preco'];
			   
			   $crop=substr($url, 12);
			   $foto2=$image;
				
				
			  

			   echo '<div style="float:left;padding-left:4px">';

               echo '<a href="mybusiness.php?id='.$id.'" style="text-decoration:none;margin-left:1px;margin-top:4px"><img alt="#" src="'.$foto2.'" width="40" height="40" style="margin-left:5px;color:#000000"><span style="font-size:8pt"><br></a>';
					

               
			
			   //echo '<span style="font-size:8pt;color:#ff0000">&nbsp;&nbsp;Pre�o:&nbsp;R$&nbsp;'.$preco.'</span></a><br>';
	
	 
			   echo '</div>';
	 
	 
	 
	 
	 
	 } 
	 



?>