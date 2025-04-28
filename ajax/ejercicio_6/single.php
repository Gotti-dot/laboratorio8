<?php
include('database.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM tbl_estudiante WHERE id = $id";
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
            'id' => $row['id']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>