<?php

$origem="img/perfil.jpg";
$destino="destino/";



if(copy($origem,$destino))
{
	echo "Arquivo copiado com sucesso";
}
else
{
	echo "Nada foi copiado.";
}





?>