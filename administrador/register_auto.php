
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
    <title>REGISTRAR MODELO DE AUTO</title>
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

    <div class="content">
        <div class="informacion">
            <p></p>&nbsp
        <h1>REGISTRAR NUEVO MODELO DE AUTO</h1><br/>
      
        <form action="registrar_auto.php" method="POST" enctype="multipart/form-data">
            <div class="contenedor">
                <div class="fila">
                    <label>NOMBRE:</label>
                    <input type="text" REQUIRED name="nombre" autocomplete="off" value=""/><br/>
                </div> <br/>
                <div class="fila">
                    <label>IMAGEN DE REFERENCIA:</label>
                    <input type="file" name="poster" accept="image/*"/><br/>
                </div><br/>
                <?php 

                include("../conexion.php");
                 $resultado = mysqli_query($conex,"select id, nombre_marca from marca");
                 ?>
                <div class="fila">
                    <table>
                        <tr>
                            <th style="color:white">MARCA</th>
                        </tr>
                        <td>
                            <select name="marca">
                                <?php
                                while ($fila=$resultado->fetch_assoc()):
                                $id=$fila['id'];
                                $nombre_marca=$fila['nombre_marca'];
                                echo "<option value=$id>$nombre_marca</option>";
                                endwhile;
                                ?>
                            </select>
                        </td>
                    </table>
                </div><br/><br/>
                    <input type="submit" value="Guardar">
            </div>
        </form>
      
    </div>
    </div>

</body>
<script src="../main.js"></script>
</html>