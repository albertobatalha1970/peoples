<?php
require 'conn.php';
require 'functions.php';
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
  <title>Peoples: voc� sempre conectado</title>
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
<input type="submit" value="Busca" style="background-color:#ff3300;color:#ffffff;height:31px;font-weight:none;font-size:10pt"/>




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

//session_start();

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
			
			echo '<a style="text-decoration:none" href="#"><span style="color:#003399;font-size:10pt;font-weight:none"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a><br>';
		 }    
?>



<?php

//session_start();

$nome=$_SESSION['nome'];
$sql=mysql_query("select*from cadastros where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $fone=$linha['fone'];

			   $_SESSION['tel']=$fone;
			   


        }    
        
    


?>

<br>
<a href="whatch.php" style=""><img title="P�GINA INICIAL" src="img/homepage.png" width="40" height="40"></a>

</fieldset>
</td>



<td style="padding-left:10px;padding-right:2px;border:1px" width="" valign="top" align="left" height="550" bgcolor="#cdcdcd">

<fieldset style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;height:400px">

<br>

<span style="padding:2px;font-size:11pt;color:#003399"><b>Meu ciclo de amizades:</b></span>

<br><br>



<center>


<?php
//session_start();

$nome=$_SESSION['nome'];
$rows=mysql_num_rows($sql);
$sql=mysql_query("select*from amigos where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $url=$linha['url'];
			   //$foto=$linha['foto'];
			   $crop=substr($url, 12);
			   $foto2='perfil/'.$crop.'.jpg';
				
	
	 $nome_cortado=substr($url, 12);
	 echo '<div style="float:left;width:100px;padding:1px;font-size:9pt"><a href="excluir.php?&id='.$id.'" style="text-decoration:none;margin-left:1px;margin-top:4px"><img alt="'.$crop.'" src="'.$foto2.'" width="90" height="90">';
			   echo '<center>';
			   echo $nome_cortado.'&nbsp;&nbsp;&nbsp;<img src="img/lixo.png" width="20" height="20">';
			   echo '</a></center>';
			   echo '</div>';
 }    
?>
<center>

</fieldset>

</td>

<td style="padding-left:10px;border:0px" width="320" valign="top" align="left" width="" height="550" bgcolor="#cdcdcd">

<fieldset style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px">

<div align="left" style="background-color:#0000ff;color:#ffffff;text-align:center;width:320px;padding:2px;">

<?php
//session_start();

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
