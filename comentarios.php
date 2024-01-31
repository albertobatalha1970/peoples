<?php
include "conn.php"; 
// Certifique-se de que 'conn.php' foi atualizado para usar mysqli

session_start();

$nome = $_SESSION['nome'];
$coments = $_POST['coments'];
// Parece que $data não foi definido no seu código original, mas foi usado. 
// Suponho que você quis usar a função date() aqui.
$data = date("Y-m-d"); 
$hora = date("H:i:s");

// Usando declarações preparadas para maior segurança
$stmt = $conexao->prepare("INSERT INTO comentar (nome, coments, data, hora) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $coments, $data, $hora);

if (!$stmt->execute()) {
    die("Erro ao inserir dados na tabela: " . $stmt->error);
}

$stmt->close();

header("location:whatch.php");
?>
