<?php
require('conexion.php');
    $id = $_GET['id_delete'];
    $sql = "DELETE FROM empleados WHERE id='$id'";
    mysqli_query($conexion, $sql);
    header('location: agregar_datos.php');

?>