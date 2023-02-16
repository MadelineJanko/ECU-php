<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″ />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODELOS DE AUTOS</title>
    <link rel="stylesheet" href="../css/adm1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<div class="sidebar">
        <center>
            <img src="../img/logo.png" class="profile_image" alt="">
            <h2>Leonardo</h2><br/>
            <h3> BIENVENIDO ADMINISTRADOR</h3>
        </center>
        <a href="usuarios.php"><i><img src="../img/iconos/3.png" width="30" height="30" alt=""></i><span>Usuarios</span></a>
        <a href="modelo.php"><i><img src="../img/iconos/2.png" width="30" height="30" alt=""></i><span>Marcas y Modelos</span></a>
        <a href="../login.php"><i><img src="../img/iconos/1.jpg" width="30" height="30" alt=""></i><span>Cerrar Sesión</span></a>
    </div>

    <div class="content1">
        <div class="informacion1">
            <p></p>&nbsp
        <h1>LISTA DE MODELOS DE AUTOS</h1><br/>
    
      <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th colspan=7 style="text-align:center"><a href="register_marca.php" style="font-size:18px; margin-right:55px" class="badge badge-primary">REGISTRAR NUEVA MARCA</a><a href="register_auto.php" style="font-size:18px" class="badge badge-primary">REGISTRAR NUEVO MODELO</a></th>
            </tr>
          <tr>
            <th colspan="2" scope="col" style="text-align:center;">MARCA</th>
            <th scope="col" style="text-align:center;">MODELO</th>
            <th scope="col" style="text-align:center;">IMAGEN</th>            
          </tr>
        </thead>

        <tbody>
          <?php

          $inc = include("../conexion.php");
          $consulta = "SELECT m.id, m.nombre, m.id_marca, m.imagen, n.id,n.imagen as mar, n.nombre_marca FROM modelo m , marca n where (n.id=m.id_marca)";
          $result = mysqli_query($conex,$consulta);
          while($row = $result->fetch_array()) {
          ?>
          <tr>
          <td style="text-align:center; padding:5px 0px"><img height="110" width="180" src="data:image/jpg;base64,<?php echo base64_encode($row['mar']); ?>"/></td>
          <td style="text-align:center; font-size:20px"><?= $row['nombre_marca']?></td>
            <td style="text-align:center; font-size:20px"><?= $row['nombre']?></td>
            <td style="text-align:center; padding:5px 0px"><img height="120" width="260" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
          </tr>
          
          <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
</body>
<script src="../main.js"></script>
<script src="https://kit.fontawesome.com/28e24ab6cf.js" crossorigin="anonymous"></script>
</html>