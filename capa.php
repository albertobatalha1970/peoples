<?php
require 'conn.php';
require 'functions.php';
?>





<form name="form" action="updatecapa.php" method="post" enctype="multipart/form-data" style="background-image: url(img/0.jpg);height:px;background-color:#ffffff" OnSubmit="return validacao();">


<input type="hidden" name="nome" size="48" value="<?php $_SESSION['nome'];?>">


<input type="file" name="imagecapa" size="48" style="color:#ffffff;width:150px">




&nbsp;&nbsp;

<input type="submit" value="Atualizar"> 




</form>
