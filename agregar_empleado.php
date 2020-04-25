<?php
    require('conexion.php');
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $dir = $_POST['direccion'];
    $tel = $_POST['telefono'];
    $ema = $_POST['email'];

$sql = "INSERT INTO empleados (nombre,apellido,direccion,telefono,email) VALUES ('$nom','$ape','$dir','$tel','$ema')";
mysqli_query($conexion, $sql);
header('location: agregar_datos.php');

?>