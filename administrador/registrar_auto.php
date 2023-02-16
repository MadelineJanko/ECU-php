<?php
    include("../conexion.php");
    $nombre=$_POST['nombre'];
    $poster=addslashes(file_get_contents($_FILES['poster']['tmp_name']));
    $marca=$_POST['marca'];

    $query ="INSERT INTO modelo(nombre,imagen,id_marca) VALUES('$nombre','$poster','$marca')";
    $resultado = $conex->query($query);

    if($resultado){
        header("Location: modelo.php");
    }
    else{
        echo "no se inserto";
    }
?>