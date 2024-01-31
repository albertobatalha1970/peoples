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
  <title>Samambaia fones</title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">



<a href='' id='toTop'><img src='img/top.png'/></a>
<script src='' type='text/javascript'/> 
<script type='text/javascript'>
$(function(){$.fn.scrollToTop=function(){$(this).hide().removeAttr(&quot;href&quot;);if($(window).scrollTop()!=&quot;0&quot;){$(this).fadeIn(&quot;slow&quot;)}var scrollDiv=$(this);$(window).scroll(function(){if($(window).scrollTop()==&quot;0&quot;){$(scrollDiv).fadeOut(&quot;slow&quot;)}else{$(scrollDiv).fadeIn(&quot;slow&quot;)}});$(this).click(function(){$(&quot;html, body&quot;).animate({scrollTop:0},&quot;slow&quot;)})}});

  $(function() {
                $(&quot;#toTop&quot;).scrollToTop();
            });
        </script>






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body>


 <table cellspacing="0" cellpadding="0" width="100%">
<td width="200" height="50" valign="top" align="left" bgcolor="#0099cc">

<center>



<img src="img/head.gif" width="860" height="60">





</center>

</td>
<tr>

<td width="200" height="10" valign="top" align="left" bgcolor="">
<center>

<div style="background-color:#8ad9ff">
<?php include "cadastrar.php";?>
</div>


<form name="searchform" action="buscas.php" method="post" style="margin-top:15px">
  
  <input type="text" name="busca" value="" style="width:400px;background-color:#f4f4f4;border-color:#000000;color:#0080c0;font-weight:none;padding:5px;border-radius:5px;
-webkit-border-radius:1px;
-moz-border-radius:1px;"/>
<input type="submit" value="Pesquisar contatos" style="color:#0055aa;font-weight:none;font-size:10pt"/>

<br><br>
<!--
<div style="color:#0055aa;font-weight:none;font-size:10pt">
</div>
-->


  <br>


  


  
  
  </form>




</center>


</td>



</table>
<tr>

<table cellspacing="0" cellpadding="0" width="100%">

<td width="234" valign="top" align="left">

</td>

<td width="600" height="500" valign="top" align="left" style="padding:10px;background-image: url(img/fundo.jpg);
background-repeat: no-repeat;
background-attachment: none/fixed;
/* e agora a regra de ouro que fará a imagem ocupar todo o viewport */
background-size: 100% 100%;filter:alpha(opacity=80);
     opacity: 0.90;">

<br><br>
  <?php


$id=$_GET["id"];


$sql=mysql_query("select*from cadastros WHERE id LIKE '%".$id."%'")or die("Cadastros não foi selecionada");
$rows=mysql_num_rows($sql);
if($rows>0)
{
	while($exibe=mysql_fetch_array($sql))
		{
	     $id=$exibe['id'];
		 $nome=$exibe['nome'];
		 $fone=$exibe['fone'];

		 $picture='<img align="left" style="margin-right:5px" src="img/tel.png" width="55" height="45">';
         
		 
		 
			}
		}
	
?>



<div style="width:100%;border:1px">
<div style="width:400px">

<?php 

         echo '<table>';
		 
		 echo '<span style="font-size:9pt;font-family:Tahoma;color:#005f8c;">';
		 echo nl2br($picture);
		 echo '&nbsp;&nbsp;&nbsp;<strong style="color:#004284;font-size:28pt">'.nl2br($fone).'</strong><br><br>';
		 echo '<div style="background-color:#0080c0;height:17px;width:380px;text-align:center"><span style="color:#ffffff;font-size:9pt">Nome do titular: '.$nome.'</span><br><br></div>';
		 echo '</table>';
		 echo '</span>';


//echo "<a style='text-decoration:none' href='javascript:history.back(1)'><span style='font-size:9pt'>Voltar</a><br><br><br>";

?>

</div>

</div>




</td>

<td width="200" valign="top" align="left">




</td>

</table>
</tr>
<tr>

<table cellspacing="0" cellpadding="0" width="100%">
<br><br><br>
<div align="center" style="color:#ffffff;font-size:10pt;background-color:#009fec">

autopostosamambaia - by Alberto Batalha



</div>

</table>

 </body>
</html>
