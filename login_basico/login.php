<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $conn = new mysqli("localhost", "root", "", "seguridad_web");
    $stmt = $conn->prepare("SELECT clave FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($clave, $row['clave'])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: dashboard.php");
            exit;
        }
    }

    $error = "Usuario o contraseña incorrectos";
}
?>
<link rel="stylesheet" href="css/estilo.css">
<h2>Iniciar sesión</h2>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="post">
    Usuario: <input type="text" name="usuario" required>
    Contraseña: <input type="password" name="clave" required>
    <input type="submit" value="Entrar">
</form>