<?php
include "conn.php";
?>

<!doctype html>
<html lang="en">
 <head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus�">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Peoples</title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body>


 


<br>







<?php

session_start();

$nome=$_SESSION['nome'];
$sql=mysql_query("select*from album where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="170">';
			   $picture2='<img alt="Ampliar" align="left" style="margin-left:none;margin-right:none" src="'.$foto.'" width="100" height="110">';
        


			
            
            if($_SESSION['nome']==true)
			{
			echo '<div style="display: inline-block;background:#ffffff;">'.$picture2."</div>'";
			}
			else
			{
			header('location:index.php');
			}
			
			

		}

?>




<br><br><br>




 </body>
</html>
