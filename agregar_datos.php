<?php
    require('conexion.php');
    $sql = "SELECT * FROM empleados";
    $resultado = mysqli_query($conexion, $sql);
    $resultado_datos = mysqli_fetch_all($resultado);
?>


<!DOCTYPE html>
<html>
    <head>
        <style>
        main{
            background-image : url('https://1.bp.blogspot.com/_h8yeuk3LnqE/TCpTXSR7xwI/AAAAAAAAAw0/aBrl2nTALo0/s1600/banner-coca-cola-festa-parintins-2010-material-de-pdv.jpg');
            background-repeat : no-repeat;
            background-size: 100% 100%;
            width: 1200px;
            height : 600px;
            margin-left: 250px;
            float: left;
        }
        #datosB{
            width : 90%;
            height : 15%;
            float  :left;
        }
        nav{
            background-color : transparent; 
            background-size: 100% 100%;
            width: 90%;
            height : 10%;
            margin-top: 1%;
            margin-left: 5%;
            float: left;
        }
        #selCreate{
            background-color: red;
            width : 10%;
            height: 100%;
            margin-left: 3%;
            border-radius : 20px;
            float: left;
        }
        .botSelect{
            background-color : #a52a2aa1;
            width : 100%;
            height : 100%;
            color : white;
            font-size : 24px;
            border: none;
            float: left;
        }
        #busqueda{
            background-color: rgba(255,255,255,0.8);
            width: 60%;
            height: 80%;
            margin-top: 0.5%;
            margin-left: 5%;
            float: left;
        }
        #buscar{
            width: 75%;
            height: 90%;
            margin-top: 0.5%;
            margin-left: 1%;
            float: left;
        }
        #botBuscar{
            background-color: #FF0101;
            width: 23%;
            height: 42px;
            margin-top: 0.5%;
            margin-left: 0.2%;
            font-size: 24px;
            color: white;
        }
        #selUpdate{
            background-color: red;
            width : 10%;
            height: 100%;
            margin-left: 10%;
            border-radius:20px;
            float: left;
        }
        #conDatos{
            background-color: transparent;
            width: 90%;
            height : 90%;
            margin-top: 1%;
            margin-left: 5%;
            float: left;
        }
        #left{
            background-color: #006280ab;
            width: 25%;
            height: 90%;
            text-align : center;
            margin-left: 1%;
            border: 2px solid rgba(255,255,255,0.8);
            float: left;
        }
        label{
            width: 90%;
            height: 10%;
            color: white;
            font-size: 120%;
            font-family: arial;
            text-align:center;
            float: left; 
        }
        input{
            width: 90%;
            height: 12%;
            margin-top: 5%;
            margin-left: 5%;
            text-align: center;
            font-size: 28px;
            float: left;
        }
        .botOpciones{
            background-color: transparent;
            width: 50%;
            height : 60px;
            margin-left: 10%;
            margin-top: 3%;
            margin-bottom: 3%;
            font-size: 32px;
            color: white;
            float: left;
        }
        #inpUpdate{
            width: 25%;
            height : 25%;
            float:left;
        }
        #center{
            background-color: #50020269;
            width: 72%;
            height: 90%;
            margin-top: 1%;
            margin-left: 1%;
            border: 2px solid rgba(255,255,255,0.8);
            float: left;
        }

        #tablaDatos{
            background-color: #50020242; 
            width: 90%;
            height: 98%;
            font-family: arial;
            font-size: 14px;
            margin-top: 1%;
            margin-left: 5%;
            float: left:

        }
        #conBusqueda{
            background-color: #FFFFFF;
            width: 90%;
            height : 45%;
            margin-top: 1%;
            margin-left: 5%;
            float: left;
        }
        table{
            width: 110%;
            height : 10%;
            margin-top:1%;
            margin-left: -5%;
        }
        th{ background-color: #006280ab;
            color: white;
            border: 2px solid black;
        }
        #right{
            background-color: #006280ab;
            width: 25%;
            height: 90%;
            display : none;
            text-align : center;
            margin-left: 1%;
            border: 2px solid rgba(255,255,255,0.8);
            float: left;
        }
       
        </style>
        <title> Datos personales</title>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width,initial-scale= 1.0">
    </head>
    <body>
    <main>   
        <nav>
            <div id="selCreate">
                <button class="botSelect" onclick="takeWaycreate('create');"> Create </button>     
            </div>
            <div id="busqueda">
                <form method="post" action="search.php">
                    <input id="buscar" name="buscar">
                    <button id="botBuscar"> buscar </button>
                </form>  
            </div> 
            <div id="selUpdate">
                <button class="botSelect" onclick="takeWayupdate('update')"> UpDate </button>   
            </div>        
        </nav>
        <div id="conDatos">
            <aside id="left">
                <form method="post" action="agregar_empleado.php" >
                    <input name="nombre">
                    <label> Nombre</label>
                    <input name="apellido">
                    <label> Apellido</label>
                    <input name="direccion">
                    <label> Direccion</label>
                    <input name="telefono">
                    <label> telefono</label>
                    <input name="email">
                    <label> Email</label>
                    <button class="botOpciones"> Create </button> 
                </form>
            </aside>
            <aside id="center">
                <div id="tablaDatos">
                    <?php foreach($resultado_datos as $datoEmp): ?>
                    <table>
                        <tr>
                            <th><?php echo $datoEmp[0]; ?></th>
                            <th><?php echo $datoEmp[1]; ?></th>
                            <th><?php echo $datoEmp[2]; ?></th>
                            <th><?php echo $datoEmp[3]; ?></th>
                            <th><?php echo $datoEmp[4]; ?></th>
                            <th><?php echo $datoEmp[5]; ?></th>
                            <th><a href="delete.php?id_delete=<?php echo $datoEmp[0]; ?>"><button>Clear</button></a></th>
                        </tr>
                    </table>
                    <?php endforeach; ?>
                </div>
            </aside>
            <aside id="right">   
                <form method="post" action="upDate.php" >
                    <input name="upDnombre">
                    <label> Nombre</label>
                    <input name="upDapellido">
                    <label> Apellido</label>
                    <input name="upDdireccion">
                    <label> Direccion</label>
                    <input name="upDtelefono">
                    <label> telefono</label>
                    <input name="upDemail">
                    <label> Email</label>
                    <button class="botOpciones"> Update </button> 
                    <input id="inpUpdate" name="chance">
                </form>
                
            </aside>
        </div>
    </main>
    <script>
        create = 0;
        upDate = 0;
        function takeWaycreate(value){
            if((value == 'create')&&(create == 0)){
                document.getElementById("left").style.display = "none";
                create++;
            } else {
                document.getElementById("left").style.display = "block";
                document.getElementById("right").style.display = "none";
                create = 0;
            }
        }   
        function takeWayupdate(value){
            if((value == 'update')&&(upDate == 0)){
                document.getElementById("right").style.display = "none";
                upDate++;
            } else {
                document.getElementById("right").style.display = "block";
                document.getElementById("left").style.display = "none";
                upDate = 0;
            }
        }   
    </script>
    </body>
</html>    