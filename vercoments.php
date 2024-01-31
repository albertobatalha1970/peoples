<?php
include "conn.php";
?>
<?php

session_start();

$nome=$_SESSION['nome'];
$sql=mysql_query("select*from cadastros where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $fone=$linha['fone'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="170">';
        


			//$img = WideImage::load('imagens/minha_foto.jpg');

            echo '<br>'.$picture;
			
			echo '<span style="color:#006633;font-size:10pt;font-weight:bold"><br>'.ucfirst(strtolower($nome)).'</span><br><br>';
			
			


			echo '<span style="color:#006633;font-size:10pt;font-weight:bold"><br>';
			
			echo '<img src="img/whats.png" width="50" height="50" align="bottom"><br>'.$fone.'<br></span>';


        }    
        
    


?>
