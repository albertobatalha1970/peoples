<?php
//require 'conn.php';
//require 'functions.php';
//require 'contador.php';

?>

<?
session_start();
echo '<strong>Titular:</strong>&nbsp;'.$_SESSION['nome'];
echo '<br>';
echo '<strong>Via url:</strong>&nbsp;'.$_SESSION['nomeget'];
?>

<embed src="whatch.php" style="width:100%;height:100%;"></embed>