<?php
require 'conn.php';
require 'functions.php';
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


<style type="text/css">
.a hover{











</style>







<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">


 <table cellspacing="0" cellpadding="0" width="100%" align="center">



<td width="400" height="" valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#003399;padding:15px;height:20px;background-image: url(img/fundo.jpg);background-repeat:repeat-x;width:100%px">




<span style='font-size:10pt;color:#ffffff'>


<form action="ver.php" method="post" style="margin-top:25px">
  

<img src="img/papo.png" width="50" height="49" align="bottom">


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
$sql=mysql_query("select*from perfil where nome='$nome' LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{	
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="?" style="color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="'.$foto.'" width="100" height="100">';



			   $picture3='<img alt="?" style="color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="img/figura.jpg" width="90" height="90">';
				

				$pasta="perfil/";
$tipo=".jpg";
$foto2=$nome.$tipo;
$duplo=$pasta.$foto2;





			   $picture2='<img align="center" style="text-align:left;margin-left:3px;margin-right:3px" src="'.$foto.'" width="30" height="30">';
               $_SESSION['imageperfil']=$picture2;

if(file_exists($duplo)){
            echo '<div style="background-color:none;width:105px;height:115px;"><br>'.$picture.'</div>';
}
else

			{


echo $picture3.'<br>';
		}

			echo '<br><span style="color:#cc6633;font-size:8pt;font-weight:none;text-decoration:none"><a href="perfil.php" style="text-decoration:none">Editar imagem</a><br>';





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



</td>



<td style="padding-left:10px;padding-right:10px;border:10px" width="" valign="top" align="left" height="550" bgcolor="#ffffff">


<div style="padding-top:22px">

<a href="editfriends.php" style=""><input type="submit" value="Editar amigos" style="width:100px"></a>



<a href="album.php" style=""><input type="submit" value="Album" style="width:100px"></a>



<a href="#" style=""><input type="submit" value="Vitrine" style="width:100px"></a>

<a href="whatch.php" style=""><input type="submit" value="Inicio" style="width:100px"></a>



</div>




<!---
<?php echo "<span style='color:#fd5200;align:right;'>Você está logado como <b>".ucwords($_SESSION['nome'])."</b>. Agora compartilhe suas idéias com outras pessoas</span>";?>
-->

<br>

<div style="background-color:none;border:2px;width:518px">
<span style='color:#003399;align:right;margin-left:5px;'>Enviar videos:&nbsp;</span>

<hr>

<form name="form" action="envideos.php" method="post" enctype="multipart/form-data" style="background-image: url(img/0.jpg);height:px;background-color:#ffffff" OnSubmit="return validacao();">


<input type="hidden" name="nome" size="48" value="<?php $_SESSION['nome'];?>">


<input type="file" name="video" size="48" style="color:#ffffff;width:150px">




&nbsp;&nbsp;

<input type="submit" value="Enviar"> 




</form>











<?php

session_start();

$nome=$_SESSION['nome'];
$sql=mysql_query("select*from perfil where nome='$nome' LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{	
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="?" style="color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="'.$foto.'" width="510" height="390">';



			   $picture3='<img alt="?" style="color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="img/figura.jpg" width="510" height="390">';
				

				$pasta="perfil/";
$tipo=".jpg";
$foto2=$nome.$tipo;
$duplo=$pasta.$foto2;





			   $picture2='<img align="center" style="text-align:left;margin-left:3px;margin-right:3px" src="'.$foto.'" width="30" height="30">';
               $_SESSION['imageperfil']=$picture2;

if(file_exists($duplo)){
            echo '<div style="background-color:none;width:105px;height:115px;"><br>'.$picture.'</div>';
}
else

			{


echo $picture3.'<br>';
		}

			
			echo '<a href="#"><span style="color:#003399;font-size:10pt;font-weight:bold"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a><br><br>';
			
			
			
			

        }    
        
    


?>


















</td>

<td style="padding-left:0px;border:0px;" width="100" valign="top" align="left" width="" height="550" bgcolor="#ffffff">
<div align="center" style="background-color:#9999ff;color:#ffffff;text-align:center;width:200px;padding:2px;">

<?php


//$nome=$_GET['nome'];



session_start();

$nome=$_SESSION['nome'];

$sql=mysql_query("select*from amigos where nome='$nome'");
$rows=mysql_num_rows($sql);
echo '<span style="font-size:9pt;">Amigos de '.ucwords($_SESSION['nome']).'&nbsp;('.$rows.')<br>';
			
		

?>



</div>

<?php
include "urlget.php";
?>





</td>

</tr>


</table>

 </body>
</html>
