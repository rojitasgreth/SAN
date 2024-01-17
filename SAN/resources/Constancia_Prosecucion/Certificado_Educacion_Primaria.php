<?php
header("content-type: text/html; charset=iso-8859-1");


// require('conexion.php');




require('pdf/fpdf.php');
$fpdf = new FPDF('P', 'cm', 'letter',true);
$fpdf->AddPage('');
$fpdf->SetFont('Arial','',9);
$fpdf->SetTextColor(0, 0, 0);

$fpdf->Image('mpe.png', 3,1,13);
$fpdf->Image('escudo.png', 9.5, 4,2);

$fpdf->SetFont('Arial','B',12);
$fpdf->SetXY(10,7.5);
$fpdf->cell(1,1, utf8_decode('CERTIFICADO'),0,1,'C',0);
$fpdf->SetXY(10,8);
$fpdf->cell(1,1, utf8_decode('DE EDUCACIÓN PRIMARIA'),0,1,'C',0);

$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(10,9);
$fpdf->cell(1,1, utf8_decode('Quien suscribe Dana Balza titular de la Cédula de Identidad Nº 9.657.036 en su condición'),0,1,'C',0);

$fpdf->SetXY(10,9.5);
$fpdf->cell(1,1, utf8_decode('de Director(a) del E.B.N CONSUELO NAVAS TOVAR, ubicado en el municipio Libertador'),0,1,'C',0);

$fpdf->SetXY(9.45,10);
$fpdf->cell(1,1, utf8_decode('de la parroquia Sta.Rosalía adscrito a la Zona Educativa del estado Distrito Capital'),0,1,'C',0);

$fpdf->SetXY(10,10.5);
$fpdf->cell(1,1, utf8_decode('certifica por medio de la presente que el (la) estudiante,___________________________'),0,1,'C',0);


/*$fpdf->cell(1,1, utf8_decode('certifica por medio de la presente que el (la) estudiante,'$nombre_estudiante),0,1,'C',0);*/

$fpdf->SetXY(10,11);
$fpdf->cell(1,1, utf8_decode('titular de Cédula de Identidad Nº _________, nacido(a) en:Caracas en fecha: _________,'),0,1,'C',0);

$fpdf->SetXY(10,11.5);
$fpdf->cell(1,1, utf8_decode('cursó el ___ Grado correspondiéndole el literal:___ durante el período escolar_________,'),0,1,'C',0);


$fpdf->SetXY(10,12);
$fpdf->cell(1,1, utf8_decode('siendo promovido(a) al 1er año del Nivel de Educación media, previo cumplimiento a los  '),0,1,'C',0);

$fpdf->SetXY(7.2,12.5);
$fpdf->cell(1,1, utf8_decode('requisitos establecidos en la Normativa Legal vigente.'),0,1,'C',0);

$fpdf->SetXY(8.5,13.5);
$dia_actual = date('d');
setlocale(LC_TIME, 'es_ES');
$mes_actual = date('F');
$año_actual = date('Y');
$fpdf->cell(1,1, utf8_decode('Constancia que se expide a los '.$dia_actual.' días del mes de '.$mes_actual.' de '.$año_actual.'   .'),0,1,'C',0);


$fpdf->SetFont('Arial','B',10);
$fpdf->SetXY(4.1,14.8);
$fpdf->cell(6.4,1.8, utf8_decode('PLANTEL'),1,0,'C',0);
$fpdf->SetXY(4.9,15.8);
$fpdf->cell(5,1, utf8_decode('PARA VALIDEZ A NIVEL NACIONAL'),0,1,'C',0);
$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(4.1,16.6);
$fpdf->cell(6.4,1, utf8_decode('DIRECTOR(A)'),1,0,'C',0);
$fpdf->SetXY(4.1,17.6);
$fpdf->cell(6.4,1, utf8_decode('Nombre y Apellido:Dana Balza'),1,0,'C',0);
$fpdf->SetXY(4.1,18.6);
$fpdf->cell(6.4,1, utf8_decode('Número de C.I: 9.657.036'),1,0,'C',0);
$fpdf->SetXY(4.1,19.6);
$fpdf->cell(6.4,3, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(4.1,19);
$fpdf->cell(6.4,3, utf8_decode('Firma y Sello'),0,0,'L',0);



$fpdf->SetFont('Arial','B',10);
$fpdf->SetXY(10.5,14.8);
$fpdf->cell(6.4,1.8, utf8_decode('ZONA EDUATIVA'),1,1,'C',0);
$fpdf->SetXY(11.2,15.8);
$fpdf->cell(5,1, utf8_decode('PARA VALIDEZ A NIVEL NACIONAL'),0,1,'C',0);
$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(10.5,16.6);
$fpdf->cell(6.4,1, utf8_decode('DIRECTOR(A)'),1,0,'C',0);
$fpdf->SetXY(10.5,17.6);
$fpdf->cell(6.4,1, utf8_decode('Nombre y Apellido<  '),1,0,'C',0);
$fpdf->SetXY(10.5,18.6);
$fpdf->cell(6.4,1, utf8_decode('Número de C.I:'),1,0,'C',0);
$fpdf->SetXY(10.5,19.6);
$fpdf->cell(6.4,3, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(10.5,19);
$fpdf->cell(6.4,3, utf8_decode('Firma y Sello'),0,0,'L',0);


$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(9.8,24);
$fpdf->cell(1,1, utf8_decode('Dirección: Av. Los Jabillos, diagonal al Banco de Venezuela, Nº 4, El Cementerio-Caracas.'),0,0,'C',0);
$fpdf->SetXY(9.8,24.5);
$fpdf->cell(1,1, utf8_decode('Teléf. 0212-668-12-18 pág. Web. ebnconsuelonavas@gmail.com y ebnconsuelo@hotmail.com'),0,0,'C',0);



$fpdf->Output('I', 'Constancia de Prosecución.pdf');