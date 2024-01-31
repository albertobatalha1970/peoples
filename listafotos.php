<?php
include "conn.php";
?>


<?php



function listaFotos(){

session_start();
$nome=$_SESSION['nomeget'];
$sql=mysql_query("select*from perfil where nome='$nome'");
while($linha=mysql_fetch_array($sql))
		{
			   $id=$linha['id'];
		       $nome=$linha['nome'];
			   $foto=$linha['foto'];
			   $picture='<img alt="Ampliar" align="bottom" style="margin-left:3px;margin-right:3px" src="'.$foto.'" width="170" height="170">';

			   

			   $picture2='<img alt="Ampliar" align="left" style="margin-left:3px;margin-right:3px;padding:1px;" src="'.$foto.'" width="30" height="30">';
        
				session_start();
			   $_SESSION['foto']=$picture2;


            echo '<br>'.$picture2;


		}

}

listaFotos();

		?>