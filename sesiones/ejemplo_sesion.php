<?php
session_start(); //Iniciar sesion
$_SESSION["username"] = "erik";
$_SESSION["email"] = "erik@gmail.com";
echo "Sesion iniciada y variables de sesion establecidas";
?>