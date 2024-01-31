<?php
require 'conn.php';

function rows()
{
    session_start();

    $nome = $_SESSION['nome'];
    $comentado = $nome;
    $conn = new mysqli('host', 'username', 'password', 'database');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM comentados WHERE comentado = ?");
    $stmt->bind_param('s', $comentado);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->num_rows;

    echo '<br><a href="inoff.php" class="link">Depoimentos</span><span>&nbsp;[' . $rows . ']</span></a><br><br>';

    $stmt->close();
    $conn->close();
}

function ccapa()
{
    session_start();
    $nome = $_SESSION['nome'];
    $pasta = "capa/";
    $conn = new mysqli('host', 'username', 'password', 'database');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT id, nome, imagecapa FROM capa WHERE nome = ? ORDER BY id DESC");
    $stmt->bind_param('s', $nome);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($linha = $result->fetch_assoc()) {
        $id = $linha['id'];
        $nome = $linha['nome'];
        $imagecapa = $linha['imagecapa'];

        echo '<img src="' . $imagecapa . '" width="100%" height="150">';
    }

    $stmt->close();
    $conn->close();
}

// Restante do código permanece o mesmo, mas deve ser atualizado conforme necessário
?>
