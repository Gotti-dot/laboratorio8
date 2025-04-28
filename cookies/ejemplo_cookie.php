<?php
$cookie_name = "datos_personales";//Nombre de la cookie
$cookie_valor = "ERIK HUALLPA ARUQUIPA";//Valor de cookie
$cookie_expire = time() + 10; //Tiempo de expiración de la cookie
//Crear la cookie
setcookie($cookie_name, $cookie_valor, $cookie_expire, "/");
echo "cookie creada";
?>