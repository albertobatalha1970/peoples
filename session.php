<?php
require 'conn.php';require 'functions.php';
?>


<fieldset align="left" style="border-radius:5px;
-webkit-border-radius:5px;-moz-border-radius:5px;border:none;margin-top:10px;background-color:#ffffff;margin-right:10px">

<div align="right" style="background-color:#003399;color:#ffffff;text-align:left;width:320px;padding:2px;margin-top:0px;">






<?php

//$nome=$_GET['nome'];
//session_start();

$nome=$_SESSION['nome'];

$sql=mysql_query("select*from audiencia where nome='$nome'");
$rows=mysql_num_rows($sql);
echo '<span style="font-size:9pt;">Monitor: voc� visitou '.$rows.' perfis este m�s<br>';
			
?>
</div>


<?

//session_start();
$nomeprime=$_SESSION['nomeget'];
$nome=$_SESSION['nome'];


//$sql="select*from audiencia group by visitou having count(visitou)>1";
$sql="select visitou, count(visitou) as duplicados from audiencia group by visitou having count(visitou)>0";
$query=mysql_query($sql);


$rows=mysql_num_rows($query);
while($exibe=mysql_fetch_array($query))

{
$id=$exibe['id'];
$visitou=$exibe['visitou'];
$nome=$exibe['nome'];
$duplicados=$exibe['duplicados'];



echo '<div style="width:300px;padding:1px;font-size:9pt"><a href="q.php?nome='.$visitou.'" style="text-decoration:none;margin-left:1px;margin-top:4px">'.$visitou.' [ '.$duplicados.' ] </div>';



}



?>

</fieldset>



