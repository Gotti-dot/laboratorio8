<?php
echo "Mostrar tiempo de vida de Cookie<br>";

if (isset($_COOKIE["datos_personales"])) {
    echo "Existe la cookies ".$_COOKIE["datos_personales"];
}else{
    echo "La cookie ha expirado";
}
?>