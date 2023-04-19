<?php
// Conectarse a la base de datos
$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");

// Realizar una consulta SQL
$result = mysqli_query($conexion, "select * from usuario");
// Crear un archivo PDF
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

// Establecer la fuente, estilo y tamaño de la letra
$pdf->SetFont('Arial','B',16);

// Escribir el título del informe
$pdf->Cell(0,10,'Listado de usuarios',0,1,'C');
$pdf->Ln(10);

// Establecer el color de fondo y de borde de las celdas de la tabla
$pdf->SetFillColor(230,230,230);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(255,255,255);

// Escribir el encabezado de la tabla
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Nombre',1,0,'C',true);
$pdf->Cell(80,10,'Correo electrónico',1,0,'C',true);
$pdf->Ln();

// Escribir los datos de la tabla
$pdf->SetFont('Arial','',12);
while($fila = mysqli_fetch_assoc($result)) {
    $pdf->Cell(40,10,$fila['nombre'],1,0,'L',false);
    $pdf->Cell(80,10,$fila['email'],1,0,'L',false);
    $pdf->Ln();
}

// Enviar el documento PDF al navegador
$pdf->Output();
