<!DOCTYPE html>
<html>
    <head>
        <style>
            
            table{
                background : #87cefa4f;
                width : 50%;
                height : 50%;  
                font-size : 20px;              
            }
            th{
                border : 2px solid #171818;
            }
            button{
                background-color: #7b68ee33;
                width : 10%;
                height : 40px;
                margin-top : 1%;
                margin-left : 40%;
                float : left;
            }

        </style>
        <title> Search Database </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    </head>
    <body>
    <?php
        require('conexion.php');
        $data = $_POST['buscar'];   
        $sql = "SELECT * FROM empleados as emp where nombre LIKE '$data%'";  
        $resultado = mysqli_query($conexion, $sql);
        $resultado_datos = mysqli_fetch_all($resultado);
        $llave = "coma mas";
        foreach($resultado_datos as $busqueda){  
        echo "<table>";  
        echo "<tr>";
            echo "<th>";
            echo $busqueda[0];
            echo "</th>";  
            echo "<th>";            
            echo $busqueda[1];
            echo "</th>";  
            echo "<th>";
            echo $busqueda[2];
            echo "</th>";
            echo "<th>";
            echo $busqueda[3];
            echo "</th>";
            echo "<th>";
            echo $busqueda[4];
            echo "</th>"; 
            echo "<th>";
            echo $busqueda[5]; 
            echo "</th>";
        echo "</tr>"; 
        echo "<br>";   
        echo "</table>";   
        }
        //echo '<script>alert("$llave");</script>';
        mysqli_query($conexion, $sql);
   
    ?>
    <a href="agregar_datos.php"><button> return </button></a>
    </body>
</html>    
