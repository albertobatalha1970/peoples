<?php
$host = "localhost";
$user = "root";
$pass = "usbw";
$db = "peoples";

$conexao = new mysqli($host, $user, $pass, $db);

// Verificando se houve um erro de conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>

