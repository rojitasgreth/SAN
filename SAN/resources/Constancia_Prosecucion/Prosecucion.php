<?php
header("content-type: text/html; charset=iso-8859-1");


// require('conexion.php');




require('pdf/fpdf.php');
$fpdf = new FPDF('P', 'cm', 'letter',true);
$fpdf->AddPage('');
$fpdf->SetFont('Arial','',9);
$fpdf->SetTextColor(0, 0, 0);

$fpdf->SetXY(10,1);
$fpdf->cell(1,1, utf8_decode('REPÚBLICA BOLIVARIANA DE VENEZUELA'),0,1,'C',0);
$fpdf->SetXY(10,1.5);
$fpdf->cell(1,1, utf8_decode('MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN'),0,1,'C',0);
$fpdf->SetXY(10,2);
$fpdf->cell(1,1, utf8_decode('E.B.N CONSUELO NAVAS TOVAR'),0,1,'C',0);
$fpdf->SetXY(10,2.5);
$fpdf->cell(1,1, utf8_decode('EL CEMENTERIO-CARACAS'),0,1,'C',0);
$fpdf->SetXY(10,3);
$fpdf->cell(1,1, utf8_decode('CODIGO DEA: OD02090101'),0,1,'C',0);

$fpdf->Image('escudo.png', 9.5, 4,2);


$fpdf->SetFont('Arial','B',10);
$fpdf->SetXY(10,7.5);
$fpdf->cell(1,1, utf8_decode('CONSTANCIA PROSECUCIÓN'),0,1,'C',0);
$fpdf->SetXY(10,8);
$fpdf->cell(1,1, utf8_decode('(Inscripción)'),0,1,'C',0);

$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(10.5,9);
$fpdf->cell(1,1, utf8_decode('El suscrito Director(a) de la Escuela Básica Nacional "Consuelo Navas Tovar", hace constar por'),0,1,'C',0);

$fpdf->SetXY(10.5,10);
$fpdf->cell(1,1, utf8_decode('medio de la presente que el(la)estudiante:________________________________________ de'),0,1,'C',0);

$fpdf->SetXY(10.5,11);
$fpdf->cell(1,1, utf8_decode('_____ años de edad y portador(a) de la cedula de identidad u Escolar Nº V- ________________, '),0,1,'C',0);

$fpdf->SetXY(10,12);
$fpdf->cell(1,1, utf8_decode('fue inscripto en este plantel para cursar el ____° grado, Sección "________",de Educación '),0,1,'C',0);

$fpdf->SetXY(10.2,13);
$fpdf->cell(1,1, utf8_decode('Primaria durante el año escolar ______________ . Constancia que se expide a petición de la '),0,1,'C',0);

$fpdf->SetXY(7.3,14);
$dia_actual = date('d');
$mes_actual = date('F');
$año_actual = date('Y');
$fpdf->cell(1,1, utf8_decode('parte interesada en Caracas, a los '.$dia_actual.' días del mes '.$mes_actual.''),0,1,'C',0);


// de ____________ de _________. 

$fpdf->SetXY(10,20);
$fpdf->cell(1,1, utf8_decode('________________________'),0,1,'C',0);

$fpdf->SetXY(10,21);
$fpdf->cell(1,1, utf8_decode('Profa. Dana Balza'),0,1,'C',0);

$fpdf->SetXY(10,22);
$fpdf->cell(1,1, utf8_decode('Directora'),0,1,'C',0);


$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(10,24);
$fpdf->cell(1,1, utf8_decode('__________________________________________________________________________________________________
'),0,1,'C',0);

$fpdf->SetXY(10,24.5);
$fpdf->cell(1,1, utf8_decode('Dirección: Av. Los Jabillos Sur, Nº 4 El Cementerio – Caracas Diagonal al Banco de Venezuela.'),0,1,'C',0);

$fpdf->SetXY(10,24.8);
$fpdf->cell(1,1, utf8_decode('Telf. 0212-6681218'),0,1,'C',0);



$fpdf->Output('I', 'Constancia de Prosecución.pdf');

?>