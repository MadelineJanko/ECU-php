<?php 
include("conexion.php");
$id=$_GET['id'];
$consulta="SELECT * FROM usuario WHERE id='$id'";
$resultado=mysqli_query($conex,$consulta);
$row=mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA PRINCIPAL</title>
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
<div class="sidebar">
        <center>
            <img src="img/logo.png" class="profile_image" alt="">
            <h2></h2><br/>
            <h3> BIENVENIDO</h3>
        </center>
        
        <a href="usuario/u_modelo.php"><i><img src="img/iconos/2.png" width="30" height="30" alt=""></i><span>Marcas de vehículos</span></a>
        <a href="login.php"><i><img src="img/iconos/1.jpg" width="30" height="30" alt=""></i><span>Cerrar Sesión</span></a>
    </div>

    <div class="content2">

    </div>
</body>
</html>