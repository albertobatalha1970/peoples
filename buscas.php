<?php
include "conn.php";
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
  <title>Achados e perdidos</title>
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
<td width="200" height="50" valign="top" align="left" bgcolor="#336600">

<center>
<!--<img align="left" style="margin-right:5px" src="img/kb.jpg" width="989" height="51">-->
</center>

</td>
<tr>

<td width="200" height="" valign="top" align="left" bgcolor="00cc33">

<div align="center" style="color:#ff3300;font-size:10pt;background-color:#006600;padding:5px">



<span style='font-size:10pt;color:#ffffff'>
<form name="searchform" action="buscas.php" method="post" style="margin-top:15px">
  
  <input type="text" name="busca" value="" style="width:400px;background-color:#f4f4f4;border-color:#ffc6c6;color:#ff0000;font-weight:none;padding:5px;border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;"/>
<input type="submit" value="Procurar algu�m" style="color:#000000;height:31px;font-weight:none;font-size:10pt"/>
</form>
</span>

</div>

<br><br><br><br>





</center>


</td>



</table>
<tr>

<table cellspacing="0" cellpadding="0" width="100%">

<td width="234" valign="top" align="left">


</td>

<td width="600" height="300" valign="top" align="left">
<br><br>

<?php
// inclui arquivo de conex�o com o banco


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // query de consulta
    $sql = "SELECT * FROM cadastros WHERE nome LIKE '%".$_POST['busca']."%' GROUP BY id ASC";
            
    // executa a query no banco de dados
    $executar = mysql_query($sql);
               
    // conta o total de resultados encontrados
    $total = mysql_num_rows($executar);
    
    // mensagem se o resultado for vazio
    if (empty($_POST['busca'])) 
    {
        echo "Digite uma palavra-chave para sua busca";
    }
    else // define valores se o resultado n�o for vazio
    {
        echo "<span style=\"font-size:10pt\">Sua busca por&nbsp;<span style='color:#ff0000'>".$_POST['busca'].",</span> retornou <span style='color:#ff0000'>".$total."</span> ocorr�ncia(s)<br><br></span><br>";
        $total = 0;
        // gera o loop com os resultados
        while ($linha = mysql_fetch_array($executar)) 
		{
			   $id=$linha['id'];
			   $nome=$linha['nome'];
		       $fone=$linha['fone'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="20" height="20">';
        
            echo $picture;



			echo '<span style="color:#ff0000;font-size:10pt;font-weight:none"><a href="q.php?nome='.$nome.'">'.$nome.'</a><br>';

			echo '<span style="color:#ff0000;font-size:10pt;font-weight:none"><a href="q.php?nome='.$fone.'">'.$fone.'</a><br>';

        }    
        
    }        
}



?>

<br>
</td>

<td style="padding:5px" width="200" valign="top" align="left">



</td>

</table>
</tr>
<tr>

<table cellspacing="0" cellpadding="0" width="100%">
<br><br>
<div align="center" style="color:#ff3300;font-size:10pt">

Alberto Batalha




</div>

</table>

 </body>
</html>
