<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA PRINCIPAL</title>
    
    <link rel="stylesheet" href="../../css/catalogo1.css">
    <link rel="stylesheet" href="../css/adm1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="sidebar">
        <center>
            <img src="../img/logo.png" class="profile_image" alt="">
            <h2></h2><br/>
            <h3> BIENVENIDO</h3>
        </center>
        <a href="../usuario/u_modelo.php"><i><img src="../img/iconos/2.png" width="30" height="30" alt=""></i><span>Marcas de vehículos</span></a>
        <a href="../login.php"><i><img src="../img/iconos/1.jpg" width="30" height="30" alt=""></i><span>Cerrar Sesión</span></a>
    </div>
    <div class="content">
        <div class="informacion">
            <p></p>&nbsp
            <h1>DETALLES</h1>
            <div id="libro">
            <?php
                include("u_listarinfo.php");
            ?>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/28e24ab6cf.js" crossorigin="anonymous"></script>
</html>