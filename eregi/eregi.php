<?php

$nome=$_POST['nome'];
echo preg_replace( '/[`^~\'"]/', $nome );


?>