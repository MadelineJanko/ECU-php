<?php
$ci=$_POST['ci'];
$pass=$_POST['pass'];
$inc = include("conexion.php");
$consulta = "SELECT * FROM usuario WHERE ci='$ci' and pass='$pass'";

$resultado = mysqli_query($conex,$consulta);
$row = $resultado->fetch_array();
if ($resultado->num_rows>0)
{  
    if($row['id']==1)
        { 
            $id= $row['id'];
            header("location:administrador/pagina.php");
        }
    else
        {
            $id= $row['id'];
            header("location:pagina.php?id=$id");
        } 
}
else
{
    include("login.php");
}
?>