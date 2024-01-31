
<?php
include "conn.php";

?>



<form action="amigos.php" method="post">

<input type="hidden" name="url" value="<?php echo $_SESSION['url'];?>">
<input type="hidden" name="nome" value="<?php echo $_SESSION['nome'];?>">
<br>




<input name="botao" title="ADICIONAR AO SEU CICLO DE AMIZADES" type="image" value="teste" src="img/maisamigos.png" width="40" height="40">





</form>

