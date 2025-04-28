<?php
sleep(3);
if(isset($_POST['num1']) && isset($_POST['num2'])){
    $numA = $_POST['num1'];
    $numB = $_POST['num2'];
    $suma = $numA + $numB;
    echo "El resultado de la suma es: ".$suma;
}
?>