<?php
header('Content-Type: text/html; charset=UTF-8');
include '../conexion.php';
if(!isset($_POST['buscar'])){
    $_POST['buscar']="";
    $buscar=$_POST['buscar'];
}
$buscar=$_POST['buscar'];
$SQL_READ= "SELECT * FROM u WHERE (codigo LIKE '%" .$buscar."%') ORDER BY codigo ASC ";

$sql_query= mysqli_query($conex,$SQL_READ);
?>