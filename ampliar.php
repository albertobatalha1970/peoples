<?php
include "conn.php";
require 'undo.php';

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
  <title></title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">


 <table cellspacing="0" cellpadding="0" width="100%" align="center">
<td width="400" height="" valign="top" align="center" bgcolor="330000">
<form action="ver.php" method="post" style="margin-top:14px">
  
<input type="text" name="busca" value="" style="margin-top:1opx;width:350px;background-color:#ffffff;border-color:#ffc6c6;color:#003366;font-weight:none;padding:5px;border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;"/>
<input type="submit" value="Busca" style="background-color:#003399;color:#ffffff;height:31px;font-weight:none;font-size:10pt"/>
</form>


<br>
<div style="background-color:#ff3300;">
<span style="font-size:10pt;color:#ffffff;text-align:left"><?php echo date("d /m/y");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brazil, Am�rica do Sul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php // date("H:i:s");?></span>





</div>
<br>

</td>
</table>

<tr>


<table cellspacing="0" cellpadding="0" width="100%" align="center">

<td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#ffffff;padding:15px;
 color:#000000;height:20px;width:200px">


<?php

//$id=$_GET['id'];
$nome=$_SESSION['nome'];
$sql=mysql_query("select*from perfil where nome='$nome' LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{	
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="?" style="color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="'.$foto.'" width="100" height="100">';
			   $picture2='<img alt="?" align="left" style="text-align:left;margin-left:3px;margin-right:3px" src="'.$foto.'" width="30" height="30">';
               $_SESSION['imageperfil']=$picture2;


            echo '<div style="background-color:none;width:105px;height:115px"><br>'.$picture.'</div>';
			//echo '<span style="color:#cc6633;font-size:8pt;font-weight:none;text-decoration:none"><a href="perfil.php" style="text-decoration:none">Editar imagem</a><br>';





			echo '<a style="text-decoration:none" href="#"><span style="color:#003399;font-size:10pt;font-weight:bold"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a><br><br>';
			
			
			
			

        }    
        
    


?>


<a href="whatch.php" style=""><img title="P�GINA INICIAL" src="img/homepage.png" width="40" height="40"></a>



</td>





<td style="padding-left:5px;padding-right:10px;border:10px" width="750" valign="top" align="left" height="600" bgcolor="#ccccff">
<center>

<div style="padding-top:22px">

Meu �lbum: imagem ampliada


</div>



<br><br>

<?php


$nome=$_SESSION['nome'];
$sql=mysql_query("select*from album where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="170">';
			   $picture2='<img alt="Ampliar" align="left" style="padding:2px;margin-left:none;margin-right:none" src="'.$foto.'" width="40" height="40">';
        


			
            
            if($_SESSION['nome']==true)
			{
			echo '<div style="display: inline-block;background:#ffffff"><a href="ampliar.php?id='.$id.'">'.$picture2.'</a></div>';
			}
			else
			{
			header('location:index.php');
			}
			
			

		}

?>


</center>



<br>










<?php



$id=$_GET['id'];

$sql=mysql_query("select*from album where id='$id'");
while($linha=mysql_fetch_array($sql))
		{
			   //$id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="center" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="">';
			   $picture2='<br><img align="center" style="margin-left:none;margin-right:none" src="'.$foto.'" width="400" height="400"><br>';
        
			

			if($_SESSION['nome']==true)
			{
            echo '<center><div style="background-image: url(limg/fundo.jpg);
	background-repeat:repeat-x;background-color:#ffffff;width:600px;align:center">';
           
			echo $picture2.'<br><br>';
			echo '<a href="del.php?id='.$id.'"><img title="Deletar imagem" src="img/lixo.png" width="40" height="40"></div><br><br>';

			
			
			}
			else
			{
			header('location:index.php');
			}
			
			

		
			
			

		}



?>


</td>

<td style="padding-left:0px;border:0px" width="200" valign="top" align="left" height="550" bgcolor="#ffffff">

<div style="background-color:#003366;color:#ffffff;text-align:center;width:200px;padding-right:12px;">

<?php


//$nome=$_GET['nome'];





$nome=$_SESSION['nome'];

$sql=mysql_query("select*from amigos where nome='$nome'");
$rows=mysql_num_rows($sql);
echo '<span style="font-size:9pt;">Amigos de '.ucwords($_SESSION['nome']).'&nbsp;('.$rows.')<br>';
			
		

?>



</div>
<br>
<?php
include "urlget.php";
?>





</tr>


</table>
</tr>

<tr>

<table cellspacing="0" cellpadding="0" width="100%" align="center">



<td width="400" height="" valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#ccccff; #0066cc;padding:15px;height:20px;">
</td>

</table>

</tr>

 </body>
</html>