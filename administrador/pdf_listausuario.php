<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    
   
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    
    // Título
    $this->Ln(10);
    $this->Cell(70);
    $this->Cell(50,10,'LISTA DE TODOS LOS USUARIOS REGISTRADOS',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->SetFont('Arial','',10);
    $this->Cell(30);
    $this->Cell(120,10,'Datos de los usuarios con el acceso al sistema, diferenciados por el id el cual tiene el siguiente formato:',0,0,'C');
    $this->Ln(10);
    $this->Cell(86,10,'1=Administrador',0,0,'C');
    $this->Ln(15);
    $this->SetFont('Arial','B',12);
    $this->Cell(8,10, 'Id', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Nombres', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Apellidos', 1, 0, 'C', 0);
    $this->Cell(22,10, 'C.I.', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Direccion', 1, 0, 'C', 0);
    $this->Cell(40,10, 'Email', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require '../conexion.php';
$consulta = "SELECT * FROM usuario";
$resultado = mysqli_query($conex,$consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','I',9);
/*aqui se hara para traer los datos*/
while($row=$resultado->fetch_assoc()){
    $pdf->Cell(8,10, $row['id'], 1, 0, 'C', 0);
    $pdf->Cell(40,10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(40,10, $row['apellidos'], 1, 0, 'C', 0);
    $pdf->Cell(22,10, $row['ci'], 1, 0, 'C', 0);
    $pdf->Cell(40,10, $row['direccion'], 1, 0, 'C', 0);
    $pdf->Cell(40,10, $row['email'], 1, 1, 'C', 0);
}


$pdf->Output();
?>