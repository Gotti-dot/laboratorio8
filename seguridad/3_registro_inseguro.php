<?php
$conn = new mysqli("localhost", "root", "", "seguridad_web");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $sql = "INSERT INTO usuarios (usuario, clave) VALUES ('$usuario', '$clave')";
    if ($conn->query($sql)) {
        echo "Usuario registrado (inseguro)";
    }
}
?>
<form method="post">
    <input type="text" name="usuario" placeholder="Usuario" required>
    <input type="password" name="clave" placeholder="Clave" required>
    <input type="submit" value="Registrarse">
</form>