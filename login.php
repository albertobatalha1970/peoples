<?php
require 'conn.php'; // Certifique-se de que conn.php também foi atualizado para usar mysqli.
require 'functions.php';

session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$_SESSION['nome'] = $nome;
$_SESSION['senha'] = $senha;

// Usando declarações preparadas para maior segurança
$stmt = $conexao->prepare("SELECT id FROM cadastros WHERE nome = ? AND senha= ?");
$stmt->bind_param("ss", $nome, $senha); 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id'];

    require 'contador.php';

    header('location:http://localhost:8080/whatch.php');
} else {
    unset($_SESSION['nome']); 
    unset($_SESSION['senha']);
    unset($_SESSION['id']);

    header('location:index.php');
}

$stmt->close();
$conexao->close();
?>
