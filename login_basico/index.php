<?php session_start(); ?>
<link rel="stylesheet" href="css/estilo.css">
<h2>Bienvenido</h2>
<?php if (isset($_SESSION['usuario'])): ?>
    <p>Hola <strong><?= htmlspecialchars($_SESSION['usuario']) ?></strong></p>
    <a href="dashboard.php">Ir al panel</a> |
    <a href="logout.php">Cerrar sesión</a>
<?php else: ?>
    <a href="login.php">Iniciar sesión</a> |
    <a href="registro.php">Registrarse</a>
<?php endif; ?>