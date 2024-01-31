<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>UPLOAD DE IMAGENS COM PHP</title>
 </head>
 <body>
  


<?php

session_start();

$_SESSION['nome']="albertobatalha";



$nome=$_SESSION['nome'];





?>






<a style="text-decoration:none" href="view.php"><b>VISUALIZAR SESSIONS ATIVAS</b></a>






<?php

echo "<br><br>Ativa 1: ".$nome;

?>







 </body>
</html>
