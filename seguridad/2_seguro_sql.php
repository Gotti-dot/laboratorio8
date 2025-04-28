<?php
$conn = new mysqli("localhost", "root", "", "seguridad_web");
$usuario = $_GET['usuario'];
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();
if ($resultado->num_rows > 0) {
    echo "Usuario encontrado";
} else {
    echo "No existe";
}
?>