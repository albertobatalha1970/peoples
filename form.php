<form name="searchform" action="comentados.php" method="post" style="margin-top:15px">


<input type="hidden" name="comentou" value="<?php $_SESSION['nome'];?>" size="60">

<input type="hidden" name="comentado" value="<?php $_SESSION['nomeget'];?>" size="60">

<input type="hidden" name="data" value="<?php echo date("d - m - Y");?>" size="60">
<br>
<input type="text" name="comentar" size="52" style="height:20px">

&nbsp;

<input type="submit" value="Compartilhar" style="color:#003399;">


</form>