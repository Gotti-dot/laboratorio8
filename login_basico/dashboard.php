<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>
<link rel="stylesheet" href="css/estilo.css">
<h2>Panel de Control</h2>
<p>Bienvenido <strong><?= htmlspecialchars($_SESSION['usuario']) ?></strong></p>
<a href="logout.php">Cerrar sesión</a>