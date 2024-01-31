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
  <title>People's</title>
  <link rel="stylesheet" type="text/css" href="style/stylo.css">






<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />






 </head>



 <body style="background-image: url(img/back2.jpg);height:250px;display:block!important;width:100%!important;z-index:2147483647!important;margin:0 auto!important;align:center;">


 <table cellspacing="0" cellpadding="0" width="600" align="center">

<tr>

<td width="200" height="" valign="top" align="center" bgcolor="#3399cc">

<div align="center" style="color:#336600;font-size:10pt;background-color:#3399cc;padding:15px;
 color: white;">



<span style='font-size:10pt;color:#ffffff'>


<form name="searchform" action="buscas.php" method="post" style="margin-top:25px;">
  
  <input type="text" name="busca" value="" style="width:400px;background-color:#ffffff;border-color:#ffc6c6;color:#003366;font-weight:none;padding:5px;border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;"/>
<input type="submit" value="Procurar alguém" style="color:#000000;height:31px;font-weight:none;font-size:10pt"/>
</form>
</span>

</div>






</center>


</td>

<tr>


<tr>




<td style="padding:5px" width="" valign="top" align="center" height="250" bgcolor="#ffffff">
<br><br>

<?php
$nome=$_GET['nome'];
$sql=mysql_query("select*from cadastros where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $fone=$linha['fone'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="300" height="240">';
        


			//$img = WideImage::load('imagens/minha_foto.jpg');

            echo '<br>'.$picture;
			
			echo '<br><br><span style="color:#000000;font-size:10pt;font-weight:bold">Nome:&nbsp;<span style="color:#3333cc;font-size:10pt;font-weight:bold">'.ucfirst(strtolower($nome)).'</span><br><br>';
			
			


			echo 'Fone:&nbsp;<span style="color:#3333cc;font-size:10pt;font-weight:bold">';
			
			echo $fone.'<br></span>';


        }    
        
    


?>


</center>

</td>

<tr>

<td style="padding:5px" width="" valign="top" align="center" height="" bgcolor="ffffff">


<div align="center" style="color:#000066">
<br>
DEIXE SEU COMENTÁRIO SOBRE <?php echo strtoupper($nome);?>:

</div>

<form name="searchform" action="comentarios.php" method="post" style="margin-top:15px">

<input type="hidden" name="nome" value="Visitante" size="60">
<br>
<textarea name="coments" rows="6" cols="60"></textarea>

<br>

<input type="submit" value="Comentar">


</form>

<br><br>

<?php include('vercommns.php');?>


</div>

</td>

</tr>


</table>

 </body>
</html>
