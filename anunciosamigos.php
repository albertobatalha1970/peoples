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
  <meta name="Generator" content="EditPlus�">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Peoples: voc� sempre conectado</title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="background-color:#3399ccdisplay:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">


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
<td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#cdcdcd;padding:2px;padding-left:15px
color:#000000;height:20px;width:100px">



<fieldset style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;height:400px">

<?php 


//function tdPerfil2(){
	
$nome=$_GET['nome'];
$tipo=".jpg";
$folder="perfil/";
$imageget=$folder.$nome.$tipo;




//session_start();
$_SESSION['album']=$nome;



$sql=mysql_query("select*from perfil where nome='$nome' LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{
			   
			   $url = $_SERVER['REQUEST_URI'];
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   //$fone=$linha['fone'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="120" height="120">';

			   

			   $picture2='<img align="left" src="'.$imageget.'" width="20%" height="">';
        
				//session_start();
			   $_SESSION['foto']=$picture2;
			   $_SESSION['userget']=$nome;
			   $_SESSION['url']=$url;



            echo '<br>'.$picture;
			
			echo '<br><a style="text-decoration:none" href="#"><span style="color:#003399;font-size:12pt;font-weight:none"><br>'.ucfirst(strtolower($nome)).'</span><br><br></a>';
			
		
        }   
//}






?>


<a href="whatch.php" style=""><img title="P�GINA INICIAL" src="img/homepage.png" width="40" height="40"></a>

</fieldset>
</td>

<td style="padding-left:5px;padding-right:10px;border:10px" width="980" valign="top" align="left" height="510" bgcolor="#ccccff">



<fieldset style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:12px;background-color:#ffffff;border-color:#e1e1e1">

<?php
//session_start();

$nome=$_GET['nome'];
$rows=mysql_num_rows($sql);
$sql=mysql_query("select*from cadproduct where nome='$nome'");
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
			echo '<fieldset style="height:300px"><img src="'.$foto2.'" width="100" height="100" style="margin-left:1px;padding-right:1px;"><br><br>';

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
				echo 'oi';
			}
			


			if($preco>0)
			{
				echo '<br><span style="font-size:10pt;color:#003399">Pre�o de desapega:&nbsp;</span><br><br>';
			echo '<span style="font-size:8pt;color:#ff0000">&nbsp;R$&nbsp;'.$preco.'</span></a><br></fieldset>';
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
