<?php
include "conn.php";
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title></title>
 </head>
 <body>
  <?php
session_start();
   if($_SESSION['nome']==true)
			{
			require 'album.php';
			}
			else
			{
			
echo 'errado';
			}
			
			

//session_start();

$nome=$_SESSION['nome'];
$sql=mysql_query("select*from cadastros where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $fone=$linha['fone'];
			   

			
			


			echo '<span style="color:#cc6633;font-size:10pt;font-weight:none"><br>';
			
			echo '<img src="img/whats.png" width="50" height="50" align="bottom"><br><br></span>';
			echo $fone.'<br></span>';

        }    
        
    


?>
 </body>
</html>
