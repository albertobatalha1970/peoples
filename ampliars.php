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
  <title></title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">


 <table cellspacing="0" cellpadding="0" width="100%" align="center">



<td width="400" height="" valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#ffffff #0066cc;padding:15px;height:20px;background-image: url(capa/'.);background-repeat:repeat-x;width:100%px">




<span style='font-size:10pt;color:#ffffff'>
<img src="img/papo2.png" width="190" height="80" align="left">

<form action="ver.php" method="post" style="margin-top:25px">
  




<font style="color:#ffffff;font-size:32pt;font-weight:bold;">People's&nbsp;</font>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



  <input type="text" name="busca" value="" style="width:350px;background-color:#ffffff;border-color:#ffc6c6;color:#003366;font-weight:none;padding:5px;border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;"/>
<input type="submit" value="Busca" style="background-color:#003399;color:#ffffff;height:31px;font-weight:none;font-size:10pt"/>




</form>


<br>
<div style="background-color:#0000ff;">
<span style="font-size:10pt;color:#ffffff;text-align:left"><?php echo date("d /m/y");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brazil, Am�rica do Sul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("H:i:s");?></span>
</div>
<br>













</td>



</table>


<tr>


<table cellspacing="0" cellpadding="0" width="100%" align="center">

<td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#ffffff;padding:15px;
 color:#000000;height:20px;width:170px">


<?php

session_start();

$nome=$_SESSION['nomeget'];
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
			echo '<span style="color:#cc6633;font-size:8pt;font-weight:none;text-decoration:none"><a href="perfil.php" style="text-decoration:none">Editar imagem</a><br>';





			echo '<a href="#"><span style="color:#003399;font-size:10pt;font-weight:bold"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a><br><br>';
			
			
			
			

        }    
        
    


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

			   $_SESSION['tel']=$fone;
			   

			
			


			
			
			echo '<img src="img/tel.jpg" width="50" height="50" align="bottom"><br></span>';
			echo '<span style="color:#003399;font-size:10pt;font-weight:bold">';
			echo '<a href="#">'.$fone.'<br></a></span>';
			echo '</span>';

        }    
        
    


?>

<?php require 'maisamigo.php';?>
<br>
<a href="qalbum.php"><input type="submit" value="Album" style="font-weight:none;color:#003399;font-size:10pt;"></a>
<br><br>
<a href="whatch.php"><input type="submit" value="Inicio" style="font-weight:none;color:#003399;font-size:10pt;"></a>
<br><br>

</td>

<td style="padding-left:50px;padding-right:30px;border:10px" width="500" valign="top" align="left" height="550" bgcolor="#ffffff">

<br>
<div style="color:#ffffff;width:600px;padding-left:0px;padding-top:0px;background:#0066cc">

&nbsp;&nbsp;Voc� st� visualizando as imagens de <?php session_start();echo ucwords($_SESSION['nomeget']);?>

</div>


<br><br>

<?php

session_start();

$nome=$_SESSION['nomeget'];
$sql=mysql_query("select*from album where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="170">';
			   $picture2='<img alt="Ampliar" align="left" style="padding:2px;margin-left:none;margin-right:none" src="'.$foto.'" width="60" height="60">';
        


			
            
            if($_SESSION['nome']==true)
			{
			echo '<div style="display: inline-block;background:#ffffff"><a href="ampliars.php?id='.$id.'">'.$picture2.'</a></div>';
			}
			else
			{
			header('location:index.php');
			}
			
			

		}

?>


<br>



<br><br>







<?php

session_start();

$id=$_GET['id'];

$sql=mysql_query("select*from album where id='$id'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="center" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="170">';
			   $picture2='<img align="center" style="margin-left:none;margin-right:none" src="'.$foto.'" width="" height=""><br>';
        
			

			
            echo '<center><div style="background-image: url(img/fundo.jpg);
	background-repeat:repeat-x;background-color:#99cc99;width:600px;align:center">';
           
			echo $picture2.'</div><br><br>';

			echo '</div>';
			
			
			

		}



?>


</td>

<td style="padding-left:0px;border:0px" width="100" valign="top" align="left" height="550" bgcolor="#ffffff">

<div style="background-color:#003366;color:#ffffff;text-align:center;width:200px;padding:2px;">

<?php


//$nome=$_GET['nome'];



session_start();

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


</td>

</tr>


</table>

 </body>
</html>
