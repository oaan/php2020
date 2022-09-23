<?php

ini_set('display_errors', 'on');

include './conecta.php';

require '../../fpdf.php';
$pdf = new FPDF('P');
$pdf->AddPage();

$pdf->Image('banner.jpg', 10, 30, 190, 45);

$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(200, 10, "NEONATOLOGIA NEOPATAGONIA", 0, 1, 'C');
$pdf->Cell(200, 10, "Listado de Recien Nacidos", 0, 1, 'C');
$pdf->Cell(10, 45, "", 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(60, 10, utf8_decode("Fecha de Impresion:  ") . date("d/m/y"), 0, 1);
$pdf->Cell(60, 10, "HCL           "
        . "NOMBRES                                "
        . "OBRA SOCIAL   "
        . "NRO AFILIADO                "
        . "HEPB", 0, 1);
$pdf->SetFont('Arial', '', 8);
$rs = mysqli_query($cn, "call sp_listado");

while ($rn = mysqli_fetch_array($rs)) {
    $HCL = $rn[0];
    $NOMBRES = $rn[1];
    $HEPB = $rn[2];
    $pdf->Cell(15, 8, $HCL);
    $pdf->Cell(95, 8, utf8_decode($NOMBRES));
    $pdf->Cell(60, 8, $HEPB);

    $pdf->Cell(50, 8, '', 0, 1);
}
$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(50, 9, "", 0, 1);
$pdf->Cell(190, 9, "TOTAL DE CLIENTES REGISTRADOS: " . mysqli_num_rows($rs), 1, 1, 'L');
$pdf->Cell(190, 9, "todos los derechos reservados oscarangarita@2022", 0, 1, 'C');
$pdf->Output();
?>



