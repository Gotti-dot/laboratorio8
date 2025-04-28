<?php
include('database.php');

$query = "SELECT * FROM tbl_estudiante";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Consulta fallida: ' . mysqli_error($connection));
}

$json = array();
while ($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'nombre' => $row['nombre'],
        'apellido' => $row['apellido'],
        'email' => $row['email'],
        'fecha_registro' => date("d-m-Y", strtotime($row['fecha_registro'])),
        'id' => $row['id']
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>