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
        <h1>U = Network (Red), La falla tiene que ver con el sistema de transmisión de datos entre los diferentes módulos que se localizan en el vehículo.</h1><br/>
        <div class="reportes" style="display:flex">
      <p></p>&nbsp<p></p>&nbsp<p></p>&nbsp<p></p>&nbsp
      <a href="p.php">
      <button type="submit" style="margin-right:25px;" class="btn btn-info">P = Powertrain (Tren motriz)</button>
        </a>
      <a href="b.php">
      <button type="submit" style="margin-right:25px;" class="btn btn-info">B = Body (Cuerpo)</button></a>  
      <a href="u.php">
      <button type="submit" style="margin-right:25px;" class="btn btn-info">U = Network (Red)</button>
        </a>
      <a href="c.php">
      <button type="submit" style="margin-right:25px;" class="btn btn-info">C = Chasis</button>
        </a>
        </div><br/>
        <h2>Buscador por Codigo:</h2>
        <form action="u.php" method="POST" autocomplete="off">
          <input type="text" name="buscar">
          <input type="submit" value="Buscar">
        </form><br/>

      <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">DESCRIPCION</th>
          </tr>
        </thead>

        <tbody>
          <?php
          include 'buscar_u.php';

          while($row = mysqli_fetch_array($sql_query)) {
          ?>
          <tr>
          <td>
                <b><a style="text-decoration: none; color: blue;" href="u_descripcion.php?id=<?php echo $row['id']; ?>"><?= $row['codigo']?></a></b> 
            </td>
            <td><?= $row['descripcion']?></td>
          </tr>
          
          <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/28e24ab6cf.js" crossorigin="anonymous"></script>
</html>