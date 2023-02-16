<?php
$id= $_REQUEST['id'];
$inc = include("../conexion.php");
$consulta = "SELECT * FROM modelo WHERE id='$id'";

$resultado = mysqli_query($conex,$consulta);
$row = $resultado->fetch_array();
if ($resultado->num_rows>0)
{  
    if($row['id']==1) {  $id= $row['id'];
            header("location:../modelo/toyota/carib.php?id=$id");}
    else{ if($row['id']==2){ $id= $row['id']; 
            header("location:../modelo/toyota/corolla.php?id=$id");}
            if($row['id']==3){ $id= $row['id']; 
                header("location:../modelo/toyota/hilux.php?id=$id");}
                if($row['id']==4){ $id= $row['id']; 
                    header("location:../modelo/suzuki/kei.php?id=$id");}
                    if($row['id']==5){ $id= $row['id']; 
                        header("location:../modelo/suzuki/reno.php?id=$id");}
                        if($row['id']==6){ $id= $row['id']; 
                            header("location:../modelo/nissan/cedric.php?id=$id");}
                            if($row['id']==7){ $id= $row['id']; 
                                header("location:../modelo/nissan/figaro.php?id=$id");}
                                if($row['id']==8){ $id= $row['id']; 
                                    header("location:../modelo/mitsubishi/carisma.php?id=$id");}
                                    if($row['id']==9){ $id= $row['id']; 
                                        header("location:../modelo/mitsubishi/eclipse.php?id=$id");}
                                        if($row['id']==10){ $id= $row['id']; 
                                            header("location:../modelo/volvo/240.php?id=$id");}
                                            if($row['id']==11){ $id= $row['id']; 
                                                header("location:../modelo/volvo/s60.php?id=$id");}
        }
            
}
else
{
    include("u_modelo.php");
}
?>