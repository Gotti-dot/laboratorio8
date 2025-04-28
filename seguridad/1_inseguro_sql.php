<?php
if (isset($_GET['usuario'])) {
    $conn = new mysqli("localhost", "root", "", "seguridad_web");
    $usuario = $_GET['usuario'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    echo $sql;
    $resultado = $conn->query($sql);
    if ($resultado->num_rows > 0) {
        echo "Usuario encontrado";
    } else {
        echo "No existe";
    }
}
?>