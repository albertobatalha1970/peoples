<?php
$host = "localhost";
$user = "root";
$pass = "usbw";
$db = "peoples";

$conexao = new mysqli($host, $user, $pass, $db);

// Verificando se houve um erro de conex�o
if ($conexao->connect_error) {
    die("Erro na conex�o: " . $conexao->connect_error);
}
?>

