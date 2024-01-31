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
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Refresh" content="1">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Peoples: você sempre conectado</title>
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

<td valign="top" align="center" style="color:#336600;font-size:10pt;background-color:#99cccc;padding:15px;
 color:#000000;height:20px;width:150px">


<?php

session_start();

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

			echo '<br><div style="background:#8080ff;width:100px"><span style="color:#cc6633;font-size:8pt;font-weight:none;text-decoration:none"><a href="perfil.php" style="text-decoration:none">Editar imagem</a></div><br>';





			echo '<a href="updatelogin.php?nome='.$nome.'&senha='.$senha.'"><span style="color:#003399;font-size:10pt;font-weight:bold"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a>';
			
			echo '<br><br><a href="inoff.php" style="">Mensagens inbox</a><br><br>';
			
			

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
			echo '<a href="">'.$fone.'<br></a></span>';
			echo '</span>';

        }    
        
    
editfone();

echo '<a href="settings.php">Configurações<br></a></span><br>';


echo '<a href="whatch.php" style="">Inicio</a>';


?>



</td>



<td style="padding-left:85px;padding-right:10px;border:10px" width="550" valign="top" align="left" height="600" bgcolor="#ffffff">


<div style="padding-top:22px">






</div>
<br>
Configurações do usuário:

<br>



Status:&nbsp;
<?php require 'status.php';?>
<br><br>

Insira novos dados:

<br><br>


<?php


session_start();

$nome=$_SESSION['nome'];
$sql=mysql_query("select*from cadastros where nome='$nome'");
while($exibe=mysql_fetch_array($sql))
{
$id=$exibe['id'];
$nome=$exibe['nome'];
$senha=$exibe['senha'];

echo $id.'<br>';
echo $nome.'<br>';
echo $senha.'<br>';

}



?>



<form action="atualiza.php" method="post" style="margin-top:15px">



<input type="hidden" name="id" value="<?php echo $id;?>">

Novo login:<br><input type="text" name="nome" size="52" style="height:20px">

<br>

Nova senha:<br><input type="text" name="senha" size="52" style="height:20px">


<br><br>

<input type="submit" value="Atualizar dados" style="color:#003399;">
<br>


</form>
<br><br>





<br><br><br><br>

</td>

<td style="display:inline;padding-left:0px" width="150" valign="top" align="left" width="" height="550" bgcolor="#ffffff">
<div align="center" style="background-color:#9999ff;color:#ffffff;text-align:center;width:98%;padding:2px;">

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
