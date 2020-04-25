<?php
require('conexion.php');
$id = $_POST['chance'];
$nom = $_POST['upDnombre'];
$ape = $_POST['upDapellido'];
$dir = $_POST['upDdireccion'];
$tel = $_POST['upDtelefono'];
$ema = $_POST['upDemail'];

$sql ="UPDATE empleados SET nombre='$nom', apellido='$ape',direccion='$dir', telefono='$tel', email='$ema' WHERE id='$id'";
mysqli_query($conexion, $sql);
header('location: agregar_datos.php');
?>