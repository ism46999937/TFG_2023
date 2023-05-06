<?php
	require 'fpdf/fpdf.php';
	include 'barcode copy.php';

	$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");

    $result = mysqli_query($conexion, "select * from Recetas");
	
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true, 20);
	$y = $pdf->GetY();
	$pdf->SetFont('Arial','B',18);

// Escribir el título del informe
$pdf->Cell(0,10,'Receta Medica',0,1,'C');
$pdf->Ln(15);

// Establecer el color de fondo y de borde de las celdas de la tabla
$pdf->SetFillColor(233, 229, 235); // color de fondo rgba
$pdf->SetDrawColor(61, 61, 61); // color de la linea

// Escribir el encabezado de la tabla
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,8,'Nombre',1,0,'C',true);
$pdf->Cell(30,8,'DNI',1,0,'C',true);
$pdf->Cell(40,8,'Nombre Medicamento',1,0,'C',true);
$pdf->Cell(40,8,'CB Medicamento',1,0,'C',true);
$pdf->Cell(40,8,'CB Receta',1,0,'C',true);
$pdf->Ln();

// Escribir los datos de la tabla
$pdf->SetFont('Arial','',9);

// Descargar la imagen y añadirla al PDF

while($fila = mysqli_fetch_assoc($result)) {

    $pdf->Cell(40,10,$fila['Nombre'],1,0,'C',false);
    $pdf->Cell(30,10,$fila['DNIPaciente'],1,0,'C',false);
    $pdf->Cell(40,10,$fila['Nombre_Medicamento'],1,0,'C',false);


    $pdf->Cell(40,10,$fila['CodigodeBarrasReceta'],1,0,'C',false);

    $code = $row['CodigodeBarrasMed'];		
    barcode('codigos/'.$code.'.png', $code, 20, 'horizontal', 'code128', true);
    $pdf->Image('codigos/'.$code.'.png',10,50,0,'PNG');
    

}
	while ($row = $result->fetch_assoc()){
		
		$code = $row['CodigodeBarrasMed'];
		
		barcode('codigos/'.$code.'.png', $code, 20, 'horizontal', 'code128', true);
		
		$pdf->Image('codigos/'.$code.'.png',10,$y,50,0,'PNG');
		
		$y = $y+15;
	}
	$pdf->Output();	
	
?>