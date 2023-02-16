<?php
    include("../conexion.php");
    $nombre=$_POST['nombre'];
    $poster=addslashes(file_get_contents($_FILES['poster']['tmp_name']));

    $query ="INSERT INTO marca(nombre_marca,imagen) VALUES('$nombre','$poster')";
    $resultado = $conex->query($query);

    if($resultado){
        header("Location: modelo.php");
    }
    else{
        echo "no se inserto";
    }
?>