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
    <title>USUARIO</title>
</head>
<body>
    <table border="1"> 
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
        </tr>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombre'];?></td>
            </tr>
        </table>

        <a href="login.php">cerrar sesion</a>
</body>
</html>