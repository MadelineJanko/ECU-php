<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA PRINCIPAL</title>
    
    <link rel="stylesheet" href="../../css/catalogo1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="sidebar">
        <center>
            <img src="../../img/logo.png" class="profile_image" alt="">
            <h2></h2><br/>
            <h3> BIENVENIDO</h3>
        </center>
        <a href="../../usuario/u_modelo.php"><i><img src="../../img/iconos/2.png" width="30" height="30" alt=""></i><span>Marcas de vehículos</span></a>
        <a href="../../login.php"><i><img src="../../img/iconos/1.jpg" width="30" height="30" alt=""></i><span>Cerrar Sesión</span></a>
    </div>
    <div class="content1">
        <div class="informacion1">
        <p></p>&nbsp
        <h1>Toyota - Carib  (1987 - 2002)</h1>
        <div id="libro">
            <?php
                include("../../conexion.php");
                $id=$_REQUEST['id'];
                $query="SELECT * FROM modelo WHERE id='$id'";
                $resultado=$conex->query($query);
                while($row = $resultado->fetch_assoc()){
                ?>
                <div class="lima">
                <img style="width:480px; height:400px; filter: drop-shadow(0 0 7px rgb(2, 2, 27))" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/><br/></div>   
                <div id="dato">
                <p>Para saber mas especificaciones dirigete a www.auto-data.net</p>
                <a href="https://www.auto-data.net/en/toyota-carib-model-481" target="_blank">Ver más sobre Toyota-Carib</a>              
                <br><br>
                <h1 style="font-size: 20px;">FALLAS EN EL CUERPO AUTOMOTRIZ SEGUN EL CODIGO OBD2</h1> 
                <p style="font-size: 15px;">Verifica el codigo de falla de la lectura del escaner OBD2</p> 
                <div id="enlace">
                <a href="../../obd2/p.php">P = Powertrain (Tren motriz), Proviene de la transmisión automática o el motor</a>
                <a href="../../obd2/b.php">B = Body (Cuerpo), Significa que la falla se encuentra en la carrocería del vehículo.</a>  
                <a href="../../obd2/u.php">U = Network (Red), La falla tiene que ver con el sistema de transmisión de datos entre los diferentes módulos que se localizan en el vehículo.</a>
                <a href="../../obd2/c.php">C = Chasis, La falla se localiza en el chasis, tales como bolsas de aire, frenos, etc.</a>  
                </div> </div><?php
                }
            ?>
        </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/28e24ab6cf.js" crossorigin="anonymous"></script>
</html>