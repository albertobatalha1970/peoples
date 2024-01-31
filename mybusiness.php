<?php
require 'conn.php';
require 'functions.php';
require 'undo.php';
?>


<?
$url = $_SERVER['REQUEST_URI'];

//echo $url;

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
  <title>Peoples: você sempre conectado</title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="background-color:#3399ccdisplay:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">


 <table cellspacing="0" cellpadding="0" width="100%" align="center">




<td width="400" height="" valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#ffcc00;padding:15px;height:20px;background-image: url(capa/'.);background-repeat:repeat-x;width:100%px">




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
<span style="font-size:10pt;color:#ffffff;text-align:left"><?php echo date("d /m/y");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brazil, América do Sul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("H:i:s");?></span>
</div>
<br>
</td>



</table>


<tr>


<table cellspacing="0" cellpadding="0" width="100%" align="center">

<td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#99cccc;height:20px;width:170px">

<div style="text-laign:center;background-color:#003399;color:#ffffff;font-size:12pt;">

<span>Desapegando</span>


</div>

<?php
include "imgbusiness.php";


?>

<br><br>
<a href="whatch.php"><input type="submit" value="Inicio" style="width:100px;font-weight:none;color:#003399;font-size:10pt;"></a>










<?php 


//function tdPerfil2(){
	
$nome=$_GET['nome'];
$tipo=".jpg";
$folder="perfil/";
$imageget=$folder.$nome.$tipo;




session_start();
$_SESSION['album']=$nome;



$sql=mysql_query("select*from perfil where nome='$nome' LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{
			   
			   $url = $_SERVER['REQUEST_URI'];
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $fone=$linha['fone'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="120" height="120">';

			   

			   $picture2='<img align="left" src="'.$imageget.'" width="20%" height="">';
        
				session_start();
			   $_SESSION['foto']=$picture2;
			   $_SESSION['userget']=$nome;
			   $_SESSION['url']=$url;



            echo '<br>'.$picture;
			
			echo '<br><a href="#"><span style="color:#003399;font-size:12pt;font-weight:none"><br>'.ucfirst(strtolower($nome)).'</span><br><br></a>';
			
		
        }   
//}



fone();?>




</td>

<td style="padding-left:70px;padding-top:33px;padding-right:70px;border:10px" width="700" valign="top" align="left" height="550" bgcolor="#ffffff">

<?php
session_start();

$id=$_GET['id'];
$rows=mysql_num_rows($sql);
$sql=mysql_query("select*from cadproduct where id='$id'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $image=$linha['image'];
			   $preco=$linha['preco'];
			   $descricao=$linha['descricao'];
			   $foto2=$image;

			 


			echo '<div style="float:left;width:155px;padding:1px;font-size:9pt">';
			if($foto2==true)
			{
			echo '<img alt="#" src="'.$foto2.'" width="" height="" style="margin-left:1px;padding-right:1px;"><br><br>';

            }
			else
			{
				echo '';
			}


            if($descricao==true)
			{
			echo $descricao.'<br>';
			
			}
			else
			{
				echo '';
			}
			


			if($preco>0)
			{
				echo '<br><span style="font-size:10pt;color:#003399">Preço de desapega:&nbsp;</span><br><br>';
			echo '<span style="font-size:8pt;color:#ff0000">&nbsp;R$&nbsp;'.$preco.'</span></a><br>';
			}
			else
			{
				echo '';
			}

			echo '</center>';
			
			
			
			
			
			echo '</div>';
			

            


			
	}    
?>








</td>

<td style="padding-left:0px;padding-top:22px;padding-right:16px" valign="top" align="left" width="320" height="550" bgcolor="#ffffff">
<div align="center" style="background-color:#003399;color:#ffffff;text-align:left;width:320px;padding:2px;padding-top:2px">

Amigos:

</div>
<?php

echo '<br>';

include "urlget.php";
echo '<br><br>';

?>



</td>








</tr>


</table>
</tr>

<tr>

<table cellspacing="0" cellpadding="0" width="100%" align="center">



<td width="400" height="" valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#3366ff; #0066cc;padding:15px;height:20px;">
</td>

</table>

</tr>

 </body>
</html>
