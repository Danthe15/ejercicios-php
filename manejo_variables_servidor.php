<?php
// $_POST, $_GET, $_FILES, $_SESSION, $_COOKIE
// Uso práctico en un contexto de formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
}

// Manejo de sesiones
session_start();
$_SESSION['usuario'] = 'ejemploUser';

// Manejo de cookies
setcookie('nombre_cookie', 'valor', time() + (86400 * 30)); // 1 día
?>
