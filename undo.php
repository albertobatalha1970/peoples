<?php
require 'conn.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['nome']) || $_SESSION['nome'] == false) {
    header('location:index.php');
    exit();
}
?>
