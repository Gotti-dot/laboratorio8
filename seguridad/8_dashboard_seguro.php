<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>
<h1>Bienvenido <?= htmlspecialchars($_SESSION['usuario']); ?></h1>