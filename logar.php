<?php
include "conn.php";
?>

<!doctype html>
<html lang="en">
 <head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Achados e perdidos: insira seu telefone para que possam achá-lo</title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="background-image: url(img/back2.jpg);height:250px;display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;align:center;">


 <table cellspacing="0" cellpadding="0" width="600" align="center">

<tr>

<td width="200" height="" valign="top" align="center" bgcolor="#3399cc">

<div align="center" style="color:#336600;font-size:10pt;background-color:#3399cc;padding:15px;
 color: white;">



<span style='font-size:10pt;color:#ffffff'>


<form name="searchform" action="buscas.php" method="post" style="margin-top:25px">
  
  <input type="text" name="busca" value="" style="width:400px;background-color:#ffffff;border-color:#ffc6c6;color:#003366;font-weight:none;padding:5px;border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;"/>
<input type="submit" value="Procurar alguém" style="color:#000000;height:31px;font-weight:none;font-size:10pt"/>
</form>
</span>

</div>






</center>


</td>

<tr>


<tr>




<td style="padding:5px" width="" valign="top" align="center" height="250" bgcolor="ccccff">
<br><br>

<?php

			   
			  session_start();
			  $fone = $_POST['fone']; 
			  $senha = $_POST['senha'];
			  mysql_query("SELECT * FROM `cadastros` WHERE `FONE` = '$fone' AND `SENHA`= '$senha'");
			  
			  if(mysql_num_rows ($result) > 0 ) 
		      { 
				  $_SESSION['fone'] = $login; $_SESSION['senha'] = $senha;
				  
			 echo "Vc foi logado com sucesso!";
			  //header('location:logar.php'); 
			  
			  } 
			  
			  else
				  { 
					  unset ($_SESSION['login']); unset ($_SESSION['senha']); 
			  
			  header('location:login.php'); 
			  
			  } 
			  
			  ?>








</td>

<tr>

<td style="padding:5px" width="" valign="top" align="center" height="200" bgcolor="ffffff">

<div style="color:ff0000">



</div>

</td>

</tr>


</table>

 </body>
</html>
