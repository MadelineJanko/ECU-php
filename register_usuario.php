<?php
    include("conexion.php");
    $ci=$_POST['ci'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    $pass=$_POST['pass'];
    $query ="INSERT INTO usuario (ci, pass, nombre, apellidos, direccion, email) VALUES ('$ci', '$pass', '$nombre', '$apellidos', '$direccion', '$email')";
    $resultado = $conex->query($query);


    if($resultado){
        header("Location: registro_exitoso.php");
    }
    else{
        echo "no se inserto";
    }
?>