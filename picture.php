<form name="form" action="return.php" method="post" enctype="multipart/form-data" style="background-image: url(img/0.jpg);height:350px;background-color:#ffffff" OnSubmit="return validacao();">


<input type="hidden" name="nome" size="48" value="<?php $_SESSION['nome'];?>">


<input type="file" name="foto" size="48" style="color:#cc6600;">


&nbsp;&nbsp;

<input type="submit" value="Enviar nova imagem" style="width:350px;background-color:#cc6600;color:#ffffff;"> 




</form>
 