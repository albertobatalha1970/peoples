<?php

//session_start();
$nome=$_SESSION['nome'];

$sql=mysql_query("select*from visitantes where nome='$nome' LIMIT 14");
$rows=mysql_num_rows($sql);
echo '<span style="color:#0033cc;font-size:10pt;margin-left:1px"> Pessoas que visitaram sua página:('.$rows.')</span><br><br>';
while($exibe=mysql_fetch_array($sql))
{
	$id=$exibe['id'];
	$nome=$exibe['nome'];
	$visitante=$exibe['visitante'];
    $ext=".jpg";
	$pasta="perfil/";

	$image=$pasta.$visitante.$ext;

	$_SESSION['uid']=$id;

	$_SESSION['image_perfil']=$image;

	echo '<a href="#"><img Style="padding:1px" src="'.$image.'" width="20" height="20"></a>';

}

?>