<?php
session_start(); //Iniciar sesion
session_unset();
session_destroy();
echo "Sesion destruida y variables de sesion eliminadas";
?>