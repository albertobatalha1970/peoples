<?php
include "conn.php"; 
// Certifique-se de que 'conn.php' foi atualizado para usar mysqli

session_start();

$nome = $_SESSION['nome'];
$coments = $_POST['coments'];
// Parece que $data n�o foi definido no seu c�digo original, mas foi usado. 
// Suponho que voc� quis usar a fun��o date() aqui.
$data = date("Y-m-d"); 
$hora = date("H:i:s");

// Usando declara��es preparadas para maior seguran�a
$stmt = $conexao->prepare("INSERT INTO comentar (nome, coments, data, hora) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $coments, $data, $hora);

if (!$stmt->execute()) {
    die("Erro ao inserir dados na tabela: " . $stmt->error);
}

$stmt->close();

header("location:whatch.php");
?>
