<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = htmlspecialchars($_POST['usuario']);
    $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);

    $conn = new mysqli("localhost", "root", "", "seguridad_web");
    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, clave) VALUES (?, ?)");
    $stmt->bind_param("ss", $usuario, $clave);

    if ($stmt->execute()) {
        echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
<link rel="stylesheet" href="css/estilo.css">

<h2>Registro</h2>

<form method="post">
    Usuario: <input type="text" name="usuario" required>
    Contraseña: <input type="password" name="clave" required>
    <input type="submit" value="Registrarse">
</form>