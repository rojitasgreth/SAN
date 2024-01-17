<?php
header("content-type: text/html; charset=iso-8859-1");


// require('conexion.php');




require('pdf/fpdf.php');
$fpdf = new FPDF('P', 'cm', 'letter',true);
$fpdf->AddPage('');
$fpdf->SetTextColor(0, 0, 0);
$fpdf->Image('log.png', 18, 1,2.6);

$fpdf->SetFont('Arial','B',8);
$fpdf->SetXY(10,4);
$fpdf->cell(1,1, utf8_decode('REPÚBLICA BOLIVARIANA DE VENEZUELA'),0,1,'C',0);
$fpdf->SetXY(10,4.5);
$fpdf->cell(1,1, utf8_decode('MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN'),0,1,'C',0);
$fpdf->SetXY(10,5);
$fpdf->cell(1,1, utf8_decode('E.B.N CONSUELO NAVAS TOVAR'),0,1,'C',0);
$fpdf->SetXY(10,5.5);
$fpdf->cell(1,1, utf8_decode('EL CEMENTERIO-CARACAS'),0,1,'C',0);
$fpdf->SetXY(10,6);
$fpdf->cell(1,1, utf8_decode('CODIGO DEA: OD02090101'),0,1,'C',0);


$fpdf->SetFont('Arial','B',9);
$fpdf->SetXY(10,8.5);
$fpdf->cell(1,1, utf8_decode('INFORME FINAL'),0,1,'C',0);


$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(12,9.5);
$fpdf->cell(1,1, utf8_decode('Por medio de la presente se hace constar que el (la) estudiante: '),0,1,'R',0);
$fpdf->SetXY(14.7,10);
$fpdf->cell(1,1, utf8_decode('Cédula Escolar/Identidad Nº: ___________ Cursante del:___ Grado, Sección: ___'),0,1,'R',0);
$fpdf->SetXY(16.3,10.5);
$fpdf->cell(1,1, utf8_decode('Durante el año escolar: _________, conforme a lo establecido en la escala alfabética para la'),0,1,'R',0);
$fpdf->SetXY(13.8,11);
$fpdf->cell(1,1, utf8_decode('los resultados del rendimiento estudiantil se determina que el(la) estudiante: '),0,1,'R',0);
$fpdf->SetXY(10.7,12);
$fpdf->cell(1,1, utf8_decode('Alcanzó todas las competencias previstas para el grado.'),0,1,'R',0);

$fpdf->SetXY(7.9,14);
$fpdf->cell(1,1, utf8_decode('Expresión Literal: ________________ '),0,1,'R',0);
$fpdf->SetXY(7.8,14.5);
$fpdf->cell(1,1, utf8_decode('Promovido (a): Al __________ Grado '),0,1,'R',0);
$fpdf->SetXY(14.1,15);
$fpdf->cell(1,1, utf8_decode('En Caracas, a los _________ días del mes de: __________ del año_______   '),0,1,'R',0);


$fpdf->SetXY(7,19);
$fpdf->cell(1,1, utf8_decode('___________________'),0,1,'R',0);
$fpdf->SetXY(7,19.5);
$fpdf->cell(1,1, utf8_decode('Firma de la Directora'),0,1,'R',0);


$fpdf->SetXY(16,19);
$fpdf->cell(1,1, utf8_decode('___________________'),0,1,'R',0);
$fpdf->SetXY(16,19.5);
$fpdf->cell(1,1, utf8_decode('Firma del Subdirector(a)'),0,1,'R',0);

$fpdf->SetXY(10,21);
$fpdf->cell(1,1, utf8_decode('Sello'),0,1,'R',0);

$fpdf->SetXY(7,22);
$fpdf->cell(1,1, utf8_decode('___________________'),0,1,'R',0);
$fpdf->SetXY(7,22.5);
$fpdf->cell(1,1, utf8_decode('Firma del Docente'),0,1,'R',0);


$fpdf->SetXY(16,22);
$fpdf->cell(1,1, utf8_decode('___________________'),0,1,'R',0);
$fpdf->SetXY(16,22.5);
$fpdf->cell(1,1, utf8_decode('Firma del Representante'),0,1,'R',0);

$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(9.8,24);
$fpdf->cell(1,1, utf8_decode('Dirección: Av. Los Jabillos, diagonal al Banco de Venezuela, Nº 4, El Cementerio-Caracas.'),0,0,'C',0);
$fpdf->SetXY(9.8,24.5);
$fpdf->cell(1,1, utf8_decode('Teléf. 0212-668-12-18 pág. Web. ebnconsuelonavas@gmail.com y ebnconsuelo@hotmail.com'),0,0,'C',0);

$fpdf->Output('I', 'Informe final.pdf');

?>