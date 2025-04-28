<?php
$conn = new mysqli("localhost", "root", "", "seguridad_web");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, clave) VALUES (?, ?)");
    $stmt->bind_param("ss", $usuario, $clave);
    if ($stmt->execute()) {
        echo "Usuario registrado (seguro)";
    }
}
?>
<form method="post">
  <input type="text" name="usuario" placeholder="Usuario" required>
  <input type="password" name="clave" placeholder="Clave" required>
  <input type="submit" value="Registrarse">
</form>