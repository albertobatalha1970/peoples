<?php
require 'conn.php';
?>

<?php

$sql=mysql_query("select*from online");
$rows=mysql_num_rows($sql);
echo '<br><div style="display:inline;color:#0033ff;font-size:9pt;width:100%;text-align:center">Pessoas online: '.$rows.'<br><br></div>';


/*
while($exibe=mysql_fetch_array($sql))
{
	$id=$exibe['id'];
	$nome=$exibe['nome'];
	$url=$exibe['url'];
    $formato=".jpg";

    $img='perfil/'.$nome.$formato;
	//echo '<div style="display:inline">';
    echo '<img src="'.$img.'" width="30" height="30"><br>';
	echo '<a href="'.$url.'" style="color:#0033ff;font-size:9pt">'.ucwords($nome).'</a><br><br>';
	
	
	
}
*/

?>