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
  <meta name="Refresh" content="1">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Peoples: voc� sempre conectado</title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">



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






<style type="text/css"></style>
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
<td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#cdcdcd;padding:2px;padding-left:10px
color:#000000;height:20px;width:100px">



<fieldset style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;height:400px">

<?php


$nome=$_SESSION['nome'];
$sql=mysql_query("select*from perfil where nome='$nome' LIMIT 1");
while($linha=mysql_fetch_array($sql))
		{	
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="?" style="margin-right:2px;color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="'.$foto.'" width="100" height="117">';



			   $picture3='<img alt="?" style="color:#ffffff;font-size:36pt;font-weight:bold;margin-left:3px;margin-right:3px" src="img/figura.jpg" width="90" height="90">';
				

				$pasta="perfil/";
$tipo=".jpg";
$foto2=$nome.$tipo;
$duplo=$pasta.$foto2;





			   $picture2='<img align="left" style="text-align:left;margin-left:3px;margin-right:1px" src="'.$foto.'" width="40" height="">';
               $_SESSION['imageperfil']=$picture2;

if(file_exists($duplo)){
            echo '<div style="background-color:none;width:105px;height:115px;"><br>'.$picture.'</div>';
}
else

			{


echo $picture3.'<br>';
		}
		

		

			





			echo '<br><a style="text-decoration:none" href="#"><span style="color:#003399;font-size:10pt;font-weight:none"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a><br>';
			
			
			

        }    
        
    


?>





<br>
<a href="whatch.php" style=""><img title="P�GINA INICIAL" src="img/homepage.png" width="40" height="40"></a>
</fieldset>

</td>



<td style="padding-left:50px;padding-right:60px;border:10px" width="390" valign="top" align="left" height="640" bgcolor="#ccccff">


<fieldset style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;margin-right:0px;border:none;margin-top:11px;background-color:#ffffff;border-color:#e1e1e1">


<form action="cadprod.php" method="post" enctype="multipart/form-data" style="margin-top:15px">
<input type="hidden" name="nome" value="<?php $_SESSION['nome'];?>" size="60">
<span style="color:#003399;font-size:12pt">Produto:</span><br><input type="produto" name="nameproduto" size="59" style="color:#003399;font-size:10pt">
<br><br>
<span style="color:#003399;font-size:12pt">Pre�o:</span><br><br>



<span style="color:#003399;font-size:12pt">R$&nbsp;</span><input type="text" name="preco" size="10" style="color:#003399;font-size:10pt">
<br><br>
<input type="file" name="foto" size="48" style="color:#ffffff;width:150px">
<br><br>
<span style="color:#003399;font-size:12pt">Descri��o do produto:</span>
<br>
<textarea name="descricao" cols="60" rows="10" style="resize:none;color:#003399;font-size:9pt"></textarea>


<br><br>

<input type="submit" value="Publicar" style="color:#003399;">


</form>
</fieldset>
<br>











<br><br>





<br><br><br><br>

</td>

<td valign="top" align="right" width="280" height="" bgcolor="#ccccff">


<fieldset align="right" style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:1px">

<div align="center" style="background-color:#003399;color:#ffffff;width:260px;padding:2px;margin-top:0px">

<?php


//$nome=$_GET['nome'];





$nome=$_SESSION['nome'];

$sql=mysql_query("select*from amigos where nome='$nome'");
$rows=mysql_num_rows($sql);
echo '<span style="font-size:9pt;">Amigos de '.ucwords($_SESSION['nome']).'&nbsp;('.$rows.')<br>';
			
		

?>



</div>
<br>


<center>


<?php
include "urlget.php";
echo '<br><br>';

?>


</center>
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

