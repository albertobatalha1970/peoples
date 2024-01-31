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
  <title>Achados e perdidos: insira seu telefone para que possam achá-lo</title>
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
-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;height:400px">




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
			   $picture2='<img alt="?" align="left" style="text-align:left;margin-left:3px;margin-right:3px" src="'.$foto.'" width="50" height="60">';
               $_SESSION['imageperfil']=$picture2;


            echo '<div style="background-color:none;width:105px;height:115px"><br>'.$picture.'</div>';
			echo '<a style="text-decoration:none" href="whatch.php"><span style="color:#003399;font-size:10pt;font-weight:bold"><br>'.ucwords($nome).'&nbsp;&nbsp;</span></a><br><br>';
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
			   
			echo '<span style="color:#003399;font-size:10pt;font-weight:bold">';
			//echo '<a href="#">'.$fone.'<br></a></span>';
			echo '</span>';
			

        }    
        
    


?>
<a href="whatch.php" style=""><img title="PÁGINA INICIAL" src="img/homepage.png" width="40" height="40"></a>
</fieldset>

</td>


<td style="padding-left:5px;padding-right:10px;border:10px" width="480" valign="top" align="left" height="" bgcolor="#ccccff">



<fieldset style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:12px;background-color:#ffffff;border-color:#e1e1e1">

<div style="padding-left:30px;display: inline-block;background:#ffffff;">

<br>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    
    $sql = "SELECT * FROM perfil WHERE nome LIKE '%".$_POST['busca']."%' GROUP BY id ASC LIMIT 20";
            
    
    $executar = mysql_query($sql);
               
    
    $total = mysql_num_rows($executar);
    
    
    if (empty($_POST['busca'])) 
    {
        echo "Digite uma palavra-chave para sua busca";
    }
    else 
    {
        echo "<span style=\"font-size:10pt;color:#0000ff\">Sua busca por&nbsp;<span style='color:#0000ff'>".$_POST['busca'].",</span> retornou <span style='color:#0000ff'>".$total."</span> ocorrência(s)<br></span><hr align=\"left\" style=\"width:409px\"><br>";
        $total = 0;
        
        while ($linha = mysql_fetch_array($executar)) 
		{
			   $id=$linha['id'];
			   $nome=$linha['nome'];
		       //$fone=$linha['fone'];
			   $foto=$linha['foto'];
			   $picture='<img src="'.$foto.'" width="60" height="60">';
        
				
			
            echo '<div style="display:inline;float:left;width:75px;padding:4px;font-size:9pt;margin-left:2px"><a href="q.php?nome='.$nome.'" style="text-decoration:none;margin-left:1px;margin-top:2px">'.$picture;
			   echo '<center>';
			   echo $nome;
			   echo '</center>';
			   echo '</div>';





			echo '&nbsp;';

        }    
        
    }        
}



?>



</fieldset>



</div>
</td>


<td valign="top" align="right" width="320" height="520" bgcolor="#ccccff">


<fieldset align="right" style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px">
<div align="center" style="background-color:#0000ff;color:#ffffff;text-align:center;width:290px;padding:2px;">

<?php


//$nome=$_GET['nome'];



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