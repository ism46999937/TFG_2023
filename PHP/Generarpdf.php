<?php
	require 'fpdf/fpdf.php';
	include 'Barcode.php';

	$conexion = mysqli_connect("localhost", "root", "root", "TFG_Grupo15");

    $result = mysqli_query($conexion, "select * from Temporal");
	
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true, 20);
	$y = $pdf->GetY();

	$pdf->SetFont('Arial','B',18);
    $pdf->Cell(0,10,'Receta Medica',0,1,'C');
    $pdf->Ln(15);

    // Establecer el color de fondo y de borde de las celdas de la tabla
    $pdf->SetFillColor(233, 229, 235); // color de fondo rgba
    $pdf->SetDrawColor(61, 61, 61); // color de la linea

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(40,8,'Nombre',1,0,'C',true);
    $pdf->Cell(30,8,'DNI',1,0,'C',true);
    $pdf->Cell(40,8,'Nombre Medicamento',1,0,'C',true);
    $pdf->Cell(40,8,'CB Medicamento',1,0,'C',true);
    $pdf->Cell(40,8,'CB Receta',1,0,'C',true);
    $pdf->Ln();

    $pdf->SetFont('Arial','',9);

    while($fila = mysqli_fetch_assoc($result)) {

		$code = $fila['CodigodeBarrasReceta'];

		barcode('codigos/'.$code.'.png', $code, 20, 'horizontal', 'code128', true);

		$code2 = $fila['CodigodeBarrasMed'];

		barcode('codigos/'.$code2.'.png', $code2, 20, 'horizontal', 'code128', true);

        $pdf->Cell(40,10,$fila['Nombre'],1,0,'C',false);
        $pdf->Cell(30,10,$fila['DNIPaciente'],1,0,'C',false);
        $pdf->Cell(40,10,$fila['Nombre_Medicamento'],1,0,'C',false);
        $pdf->Image('codigos/'.$code2.'.png',$pdf->GetX(),$pdf->GetY()+2,40,0,'PNG');
        $pdf->Cell(40,10,'',1,0,'C',false);
        $pdf->Image('codigos/'.$code.'.png',$pdf->GetX(),$pdf->GetY()+2,40,0,'PNG');
        $pdf->Cell(40,10,"",1,0,'C',false);
        $pdf->ln();

    
    }
	$pdf->Output();	
	
?>
