<form name="searchform" action="comentados.php" method="post" style="margin-top:15px">

<input type="text" name="comentario" size="20" style="height:10px;">
<input type="hidden" name="data" value="<?php echo date("d - m - Y");?>" size="60">
<input type="hidden" name="hora" value="<?php echo date("H:i:s");?>" size="60">
&nbsp;

<input type="submit" value="Responder" style="color:#003399;font-size:8pt;height:16px;">


</form>