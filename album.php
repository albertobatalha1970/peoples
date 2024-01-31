<?php
include "conn.php";
require 'undo.php';
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
  <title></title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="background-color:ccccff;display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">


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
<span style="font-size:10pt;color:#ffffff;text-align:left"><?php echo date("d /m/y");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brazil, América do Sul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php // date("H:i:s");?></span>
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
-moz-border-radius:5px;border:none;margin-top:7px;background-color:#ffffff;height:400px">

<?php


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
			




			echo '<a style="text-decoration:none" href="#"><span style="color:#003399;font-size:10pt;font-weight:none"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a><br><br>';
			
			
			
			

        }    
        
    


?>



<br>


<a href="whatch.php" style=""><img title="PÁGINA INICIAL" src="img/homepage.png" width="40" height="40"></a>




</fieldset>

</td>

<td style="padding-left:5px;padding-right:0px;border:10px;background-color:#cdcdcd" width="500" valign="top" align="left" height="">


<fieldset align="center" style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#9999cc;margin-right:10px">

<?php



$nome=$_SESSION['nome'];
$sql=mysql_query("select*from album where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="170">';
			   $picture2='<img align="center" style="padding:1px" src="'.$foto.'" width="90" height="90">';
        


			
            
            if($_SESSION['nome']==true)
			{
			echo '<div style="display:inline-block;background:#ffffff"><a href="ampliar.php?id='.$id.'">'.$picture2.'</a></div>';
			}
			else
			{
			header('location:index.php');
			}
			
			

		}

?>
</center>






<br>

<form action="validaFotos.php" method="post" enctype="multipart/form-data" style="background-image: url(img/0.jpg);padding-left:0px;height:px;color:#ffffff;background-color:#fff;">
<font style="color:#006600;font-size:12pt;font-weight:bold">&nbsp;




<div style="background-color::#fff">

<input type="file" name="foto" style="color:#006600">

<input type="hidden" name="foto" value="<?php echo $_SESSION['nome'];?>" size="10" style="color:#006600;width:10px">


&nbsp;&nbsp;<input type="submit" value="Enviar" style="background-color:none:#ffffff;"> 

</div>


</form>

<br><br>




</fieldset>

<br><br><br>

</td>

<td style="padding-left:0px;" valign="top" align="left" width="320" height="550" bgcolor="#cdcdcd">


<fieldset style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px">

<div align="center" style="background-color:#0033cc;color:#ffffff;text-align:left;width:320px;padding:2px;margin-top:0px">

<?php


//$nome=$_GET['nome'];




$nome=$_SESSION['nome'];

$sql=mysql_query("select*from amigos where nome='$nome'");
$rows=mysql_num_rows($sql);
echo '<span style="font-size:9pt;">Amigos:&nbsp;('.$rows.')<br>';
			
		

?>



</div>
<br>
<?php
include "urlget.php";
?>

</fieldset>

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
