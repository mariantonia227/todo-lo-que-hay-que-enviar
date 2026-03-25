<?php
session_start();

// 🔥 VALIDAR LOGIN
if (!isset($_SESSION['nombre'])) {
header("Location: /LEAFY_PROYECTO_2/login.php");
exit();
}

if (!isset($_GET['id'])) {
    header("Location: principal.php");
    exit();
}

$id = $_GET['id'];

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

$_SESSION['carrito'][] = $id;

// 👇 volver a donde tú quieras
if (isset($_GET['volver'])) {
    header("Location: " . $_GET['volver']);
} else {
    header("Location: principal.php");
}

exit();
?>