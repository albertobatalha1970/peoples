<?php
require 'conn.php';

?>
<?php
session_start();

$nome=$_SESSION['nome'];
$rows=mysql_num_rows($sql);
$sql=mysql_query("select*from amigos where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $url=$linha['url'];
			   //$foto=$linha['foto'];
			   $crop=substr($url, 12);
			   $foto2='perfil/'.$crop.'.jpg';
				
				//echo $foto2."<br>";
			  



               echo '<a href="'.$url.'" style="text-decoration:none;margin-left:1px;"><img alt="'.$crop.'" src="'.$foto2.'" width="67" height="62">';
	
	 
	 
	 
	 
	 
	 
	 
	 }    
?>