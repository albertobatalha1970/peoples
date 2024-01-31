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
  <title>Peoples: você sempre conectado</title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">


 <table cellspacing="0" cellpadding="0" width="100%" align="center">



<td width="400" height="" valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#cc6633;padding:15px;
 color: white;height:20px">




<span style='font-size:10pt;color:#ffffff'>


<form action="ver.php" method="post" style="margin-top:25px">
  

<img src="img/home.png" width="50" height="49" align="bottom">


<font style="color:#ffffff;font-size:32pt;font-weight:bold;">People's&nbsp;</font>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



  <input type="text" name="busca" value="" style="width:400px;background-color:#ffffff;border-color:#ffc6c6;color:#003366;font-weight:none;padding:5px;border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;"/>
<input type="submit" value="Procurar alguém" style="color:#000000;height:31px;font-weight:none;font-size:10pt"/>




</form>






</span>









</td>



</table>


<tr>


<table cellspacing="0" cellpadding="0" width="100%" align="center">

<td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#ffffff;padding:15px;
 color:#000000;height:20px;width:170px">


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
			   $picture2='<img alt="Ampliar" align="left" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="30" height="30">';
        
				$_SESSION['imageperfil']=$picture2;

			

            echo '<div style="background-color:#cc6633;border:2px"><br>'.$picture.'</div>';
			
			echo '<span style="color:#cc6633;font-size:10pt;font-weight:none"><br>'.ucfirst(strtolower($nome)).'</span><br><br>';
			
			


			echo '<span style="color:#cc6633;font-size:10pt;font-weight:none"><br>';
			
			echo '<img src="img/whats.png" width="50" height="50" align="bottom"><br>'.$fone.'<br></span>';


        }    
        
    


?>


<br><br>
<a href="album.php"><img src="img/album.jpg" width="50" height="49" align="bottom"></a>
<br>
<span style="color:#cc6633;font-size:10pt;font-weight:none">Imagens</span>

<br><br>
<a href="whatch.php"><img src="img/home.png" width="50" height="49" align="bottom"></a>
<br>
<span style="color:#cc6633;font-size:10pt;font-weight:none">Anúncios</span>

<br><br>
<a href="logout.php"><img src="img/sair.jpg" width="50" height="50" align="bottom"></a>


<br><br><br>
</td>



<td style="padding-left:70px;padding-right:70px;border:10px" width="800" valign="top" align="left" height="550" bgcolor="#ffffff">

<br>

<?php echo "<span style='color:#fd5200;align:right;'>Você está logado como <b>".$_SESSION['nome']." </b>.Descreva seu produto:</span>";?>

<br>

<form name="searchform" action="comentarios.php" method="post" style="margin-top:15px">



Produto:<br><input type="txt" name="produto" size="60"><br>


<br><input type="txt" name="hidden" value="<?php $_SESSION['nome'];?>" size="60"><br>


Foto:<br><input type="file" name="nome" value="<?php $_SESSION['nome'];?>" size="60"><br><br>


Descrição do produto:<br>

<textarea name="coments" rows="4" cols="70"></textarea>

<br>

<input type="submit" value="Compartilhar">


</form>
<br><br>




<?php

echo '<span style="color:#fd5200;font-size:12pt;font-weight:none">';
//echo 'ANÚNCIOS DE '.strtoupper($nome).'</span><br><br><br>';

?>

<?php
session_start();
$nome=$_SESSION['nome'];
$sql=mysql_query("select*from comentar where nome='$nome' order by id DESC");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $coments=$linha['coments'];
			   $mandante=$linha['mandante'];
        


			

            
			


			echo $mandante.'<span style="color:#003333;font-size:10pt;font-weight:none">';
			
			echo $picture2.$coments.'</span><br><br>';


        }    
        
    


?>





</td>

<td style="padding-left:0px;border:0px" width="100" valign="top" align="left" height="550" bgcolor="#cc9933">
<br><br>

</td>

</tr>


</table>

 </body>
</html>
