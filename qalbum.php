<?php
require 'conn.php';
require 'functions.php';
require 'contador.php';

?>

<!doctype html>
<html lang="en">
 <head>
  
<script language="javascript">
var win = null;
function NovaJanela(pagina,nome,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	win = window.open(pagina,nome,settings);
}
</script>
 
 <!--

 <a href="editnumber.php?&id='.$id.'" onclick="NovaJanela(this.href,'nomeJanela','450','450','yes');return true">Bate-papo</a>

-->



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
<td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#cdcdcd;padding:2px;padding-left:15px
color:#000000;height:20px;width:100px">



<fieldset style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;height:400px">


<?php

$nome=$_SESSION['nomeget'];
$sql=mysql_query("select*from perfil where nome='$nome' LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   //$fone=$linha['fone'];
			   $foto=$linha['foto'];
			   $picture='<img align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="100" height="100">';
			   $picture2='<img alt="Ampliar" align="left" style="margin-left:3px;margin-right:3px;padding:1px;" src="'.$foto.'" width="30" height="30">';
        
				
			   $_SESSION['foto']=$picture2;


            echo '<br>'.$picture;
			
			echo '<br><span style="color:#0033cc;font-size:10pt;font-weight:bold"><br>'.ucfirst(strtolower($nome)).'</span><br><br>';
	}    
 ?>
<?php //require 'maisamigo.php';?>

<a href="whatch.php"><img src="img/home.png" width="40" height="40"></a>
<br><br>


</fieldset>

</td>
<td style="padding-left:5px;padding-right:10px;border:10px" width="980" valign="top" align="left" height="550" bgcolor="#ccccff">



<fieldset style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:12px;background-color:#ffffff;border-color:#e1e1e1">


Imagens:

<hr>

<?php



$nome=$_SESSION['nomeget'];
$sql=mysql_query("select*from album where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="170">';
			   $picture2='<img alt="Ampliar" align="left" style="margin-left:1px;margin-right:1px;margin-bottom:1px" src="'.$foto.'" width="98" height="100">';
        
			if($_SESSION['nome']==true)
			{
			
			//echo '<div style="display: inline-block;background:#ffffff"><a href="ampliars.php?nome='.$id.'">'.$picture2.'&nbsp;</a></div>';
			echo $picture2;
			
			}
			else
			{
			echo "oi";
			}
			}
		?>
</center>


</fieldset>


</td>
<td valign="top" align="right" width="320" height="" bgcolor="#ccccff">


<fieldset align="right" style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px">
<div align="center" style="background-color:#0000ff;color:#ffffff;text-align:center;width:220;padding:2px;">

<?php

$nome=$_SESSION['nome'];
$sql=mysql_query("select*from amigos where nome='$nome'");
$rows=mysql_num_rows($sql);
echo '<span style="font-size:9pt;">Amigos de '.ucwords($_SESSION['nome']).'&nbsp;('.$rows.')<br>';
?>
</div>
<br>
<?php
include "urlget.php";
echo '<br><br>';
//require 'pessoasonline.php';
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
