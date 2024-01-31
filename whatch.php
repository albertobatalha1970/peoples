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
 

<style type="text/css"></style>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>

<body style="display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;">




<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>






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
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;height:580px">


<?php

//session_start();

$nome=$_SESSION['nome'];






$sql="SELECT * FROM perfil where nome='".$nome."' LIMIT 1";

$resultado=$conexao->query($sql);
while($linha=$resultado->fetch_array(MYSQLI_BOTH))
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





			   $picture2='<img title="'.$nome.'" align="left" style="text-align:left;margin-left:3px;margin-right:1px" src="'.$foto.'" width="40" height="">';
               $_SESSION['imageperfil']=$picture2;

if(file_exists($duplo)){
            echo '<div style="background-color:none;width:105px;height:115px;"><br>'.$picture.'</div>';
}
else

			{


echo $picture3.'<br>';
		}
		

		

		echo '<br><div style="background:#ffffff;width:100px"><span style="color:#000000;font-size:8pt;font-weight:none;text-decoration:none"><a href="perfil.php" style="text-decoration:none">Editar&nbsp;<img src="img/edit.png" width="10" height="10"></a></div><br>';


			





			echo '<a style="text-decoration:none" href="#"><span style="color:#003399;font-size:10pt;font-weight:bold"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a>';
			
			echo '<br><br><a style="text-decoration:none" href="inoff.php?nome='.$nome.'" style="">
			
			<img src="img/depoimentos.png" width="40" height="40">
			<br>
			Depoimentos</a><br><br>';
			
			

        }    
        
    


?>




<a href="whatch.php"></a>







<?

$sql="SELECT * FROM cadastros where nome='".$nome."' LIMIT 1";

?>

<?php

//session_start();

$nome=$_SESSION['nome'];
$sql="SELECT * FROM cadastros where nome='".$nome."'";
$resultado=$conexao->query($sql);
while($linha=$resultado->fetch_array(MYSQLI_BOTH))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $fone=$linha['fone'];

			   $_SESSION['tel']=$fone;
			   

			echo '<span>';
			echo '<a class="link" href="editnumber.php?&id='.$id.'"><img src="img/fone.png" width="40" height="40"><br>'.$fone.'<br><br></a></span>';
			echo '</span>';

        }    
        
    
//editfone();

echo '<a class="link" href="settings.php">
<img src="img/config.png" width="40" height="40">
<br>
Configurações<br></a></span>';





?>

</fieldset>

</td>



<td style="padding-left:5px;padding-right:10px;border:10px" width="980" valign="top" align="left" bgcolor="#ccccff">
<fieldset style="text-align:center;border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:12px;background-color:#ffffff;border-color:#e1e1e1">
<?

//session_start();

function contador(){
if($_SESSION['nome']==true){
$_SESSION['contador']=$_SESSION['contador']+1;

}}
?>



</fieldset>
<fieldset style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:12px;background-color:#ffffff;border-color:#e1e1e1">


<center>
<div style="margin-left:60px;background-color:none;border:0px;text-align:left">
<span style='color:#484848;align:right;margin-left:5px;font-weight:none'>
<?php require 'verstatus.php';?>
</span>
</div>



<div align="center" style="padding-top:22px">

<a href="editfriends.php" style=""><input type="submit" value="editar amigos" style="background-color:#339933;color:#ffffff;width:90px"></a>



<a href="album.php" style=""><input type="submit" value="imagens" style="background-color:#ff9900;color:#ffffff;width:90px"></a>


<a href="vitrine.php" style=""><input type="submit" value="anunciar" style="background-color:#0066ff;color:#ffffff;width:90px"></a>

<a href="logout.php" style=""><input type="submit" value="sair" style="background-color:#ff3333;color:#ffffff;width:50px"></a>



</div>



<br>



</fieldset>







<fieldset style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;border:none;margin-top:11px;background-color:#ffffff;border-color:#e1e1e1">

<center>
<form name="searchform" action="comentarios.php" method="post" style="margin-top:15px">


<input type="hidden" name="nome" value="<?php $_SESSION['nome'];?>" size="60">

<input type="hidden" name="data" value="<?php echo date("d - m - Y");?>" size="60">
<br>

<textarea name="coments" cols="55" rows="8" style="border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;color:#003399;font-size:9pt;resize:none"></textarea>
&nbsp;
<br>
</div>

<div style="margin-right:39px;background-color:none;border:0px;text-align:right">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="botao" title="COMPARTILHAR" type="image" value="teste" src="img/shareit.png" width="50" height="18">
</div>

</form>
<br><br>

</center>




<div align="left" style="padding-left:42px;width:980">

<?php

echo '<span style="color:#fd5200;font-size:12pt;font-weight:none">';

?>

<?php







//session_start();
$nome=$_SESSION['nome'];
$sql="SELECT * FROM comentar where nome='".$nome."' order by id DESC LIMIT 4";
$resultado=$conexao->query($sql);
while($linha=$resultado->fetch_array(MYSQLI_BOTH))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $coments=$linha['coments'];
			   $mandante=$linha['mandante'];
			   $data=$linha['data'];
			   $hora=$linha['hora'];
        


			

            
			

			echo '<div style="background-color:#ffffff;width:400px">';


			echo '<a href="'.$nome.'">',$picture2.'</a><a style="text-decoration:none" href="#" style="padding-left:10px;text-align:left;color:#cc3300;font-size:10pt;font-weight:bold;font-family: sans-serif, Geneva, Verdana, Arial;">&nbsp;&nbsp;'.ucwords($nome).':</a></span>';
			
			
			
			echo '</a><br><span style="padding-left:10px;text-align:left;color:#333300;font-size:9pt;font-weight:none;font-family: Arial, sans-serif;Verdana, Geneva">'.$coments.'<br><span style="padding-left:10px;text-align:left;color:#9191ff;font-size:7pt;font-weight:none;font-family: sans-serif;Verdana, Geneva, Arial">'.$data.'&nbsp;&nbsp;/ '.$hora.'</span>';

			echo '</div>';

			echo '<div class="excluir">';

			echo '<a href="excluirmsg.php?id='.$id.'" style="text-decoration:none;color:#9191ff">excluir</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			
			//echo '<a href="compartilhar.php?id='.$id.'&coments='.$coments.'&nome='.$nome.'" style="text-decoration:none;color:#9191ff">compartilhar</a><br><br><br>';
			
			

			echo '</div><br>';








        }    
        
    


?>

</div>


</fieldset>


<br>

</td>

<td valign="top" align="" width="320" height="" bgcolor="#ccccff">


<fieldset align="right" style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px">



<div align="right" style="background-color:#003399;color:#ffffff;text-align:left;width:320px;padding:2px;margin-top:0px;">






<?php


//$nome=$_GET['nome'];



//session_start();


$nome=$_SESSION['nome'];

$sql="SELECT * FROM amigos where nome='".$nome."'";
$resultado=$conexao->query($sql);
$rows=mysqli_num_rows($resultado);
echo '<span style="font-size:9pt;">Amigos:&nbsp;'.$rows;
			
		

?>



</div>



<br>
<?php
include "urlget.php";
echo '';

?>




<!--VOCÊ VISITOU-->

</fieldset>








<fieldset align="left" style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffe28a;margin-right:10px">

<div align="right" style="background-color:#003399;color:#ffffff;text-align:left;width:320px;padding:2px;margin-top:0px;">






<?php

echo '<span style="font-size:9pt;">Advertsings';
			
?>
</div>

<br>
<?php
//session_start();

$nome=$_SESSION['nome'];
//$rows=mysql_num_rows($sql);





$sql="SELECT * FROM cadproduct where nome='$nome' order by id DESC LIMIT 4";
$resultado=$conexao->query($sql);
$rows=mysqli_num_rows($resultado);
while($linha=$resultado->fetch_array(MYSQLI_BOTH))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $image=$linha['image'];
			   $preco=$linha['preco'];
			   $descricao=$linha['descricao'];
			   $nameproduto=$linha['nameproduto'];
			   $foto2=$image;

			 


			echo '';
			if($foto2==true)
			{


				echo '<span style="font-size:8pt;color:#ff0000">&nbsp;R$&nbsp;'.$nameproduto.'</span></a>&nbsp;&nbsp;<br>';
			echo '<img style="padding:5px;" align="left" src="'.$foto2.'" width="100" height="100""><br>';

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
				echo '<br><span style="font-size:10pt;color:#003399">Preço de desapega:&nbsp;</span>';
				
			echo '<span style="font-size:8pt;color:#ff0000">&nbsp;R$&nbsp;'.$preco.'</span></a>&nbsp;&nbsp;';
			echo '<a href="delsales.php?id='.$id.'"><img title="Deletar artigo" src="img/lixo.png" width="20" height="20"></a><br><br>';
			}
			else
			{
				echo '';
			}

			echo '</center>';
			
			
			
			
			
			

            


			
	}    
?>
<br>
</fieldset>



<?php



$nome=$_SESSION['nome'];


$sql="SELECT * FROM audiencia where nome='$nome' order by id DESC LIMIT 4";
$resultado=$conexao->query($sql);
$rows=mysqli_num_rows($resultado);


//echo '<span style="font-size:9pt;">Monitor: você visitou '.$rows.' perfis este mês<br>';
			
?>


<!--<a href="session.php?nome='.$visitou.'" style="text-decoration:none;margin-left:1px;margin-top:4px"> - dar uma espiadinha</a>-->


<fieldset align="left" style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px">

<div class="fb-follow" data-href="https://www.facebook.com/albertobatalha" data-width="40" data-height="140" data-layout="standard" data-size="small" data-show-faces="true"></div>





</fieldset>



</td>
</tr>


</table>
</tr>

<tr>

<table cellspacing="0" cellpadding="0" width="100%" align="center">



<td width="400" height="" valign="bottom" align="center" style="color:#336600;font-size:10pt;background-color:#ccccff; #0066cc;padding:15px;height:20px;">
</td>

</table>

</tr>

 </body>
</html>
