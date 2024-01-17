<?php
header("content-type: text/html; charset=iso-8859-1");


// require('conexion.php');




require('pdf/fpdf.php');
$fpdf = new FPDF('P', 'cm', 'letter',true);
$fpdf->AddPage('');
$fpdf->SetTextColor(0, 0, 0);
$fpdf->Image('log.png', 1, 1,2.6);

$fpdf->SetFont('Arial','B',10);
$fpdf->SetXY(10,1);
$fpdf->cell(1,1, utf8_decode('INFORME DESCRIPTIVO'),0,1,'C',0);
$fpdf->SetXY(10,1.5);
$mes_actual = strftime('%B');
$mes_siguiente = strftime('%B', strtotime('+1 month'));
$fpdf->cell(1,1, utf8_decode('PERIODO '.$mes_actual.'-'.$mes_siguiente.''),0,1,'C',0);
$fpdf->SetXY(10,2);
$año_actual = date('Y');
$año_siguiente = $año_actual+1;
$fpdf->cell(1,1, utf8_decode('AÑO ESCOLAR '.$año_actual.'-'.$año_siguiente.''),0,1,'C',0);  
 


$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(8,7);
$fpdf->cell(1,1, utf8_decode('Estudiante: ________________________________ Cédula Escolar/Identidad:___________'),0,1,'C',0);
$fpdf->SetXY(6.75,7.5);
$fpdf->cell(1,1, utf8_decode('Etapa:_ Grado:__ Sección: __ Docente:_______________ Fecha:________'),0,1,'C',0);
$fpdf->SetXY(5.55,8);
$fpdf->cell(1,1, utf8_decode('Nombre del Proyecto: _______________________________'),0,1,'C',0);


$fpdf->SetXY(2,10);
$fpdf->cell(5,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(2,10.3);
$fpdf->cell(5,1, utf8_decode('ASPECTOS EVALUADOS'),0,0,'C',0);

$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(2,11.5);
$fpdf->cell(5,1.5, utf8_decode(''),1,0,'C',0);;
$fpdf->SetXY(2,11.6);
$fpdf->cell(5,1, utf8_decode('1-Reconoce la importancia de la vacunación'),0,0,'C',0);
$fpdf->SetXY(2,11.9);
$fpdf->cell(5,1, utf8_decode('como mediante preventiva de la salud'),0,0,'C',0);


$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(2,13);
$fpdf->cell(5,1.5, utf8_decode(''),1,0,'C',0);;
$fpdf->SetXY(2,13.1);
$fpdf->cell(5,1, utf8_decode('2-Menciona las formas de contaminación del'),0,0,'C',0);
$fpdf->SetXY(2,13.4);
$fpdf->cell(5,1, utf8_decode('aire que existe en el medio ambiente.'),0,0,'C',0);


$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(2,14.5);
$fpdf->cell(5,1.5, utf8_decode(''),1,0,'C',0);;
$fpdf->SetXY(2,14.6);
$fpdf->cell(5,1, utf8_decode('3-Explica las razones de la influencia de'),0,0,'C',0);
$fpdf->SetXY(2,14.9);
$fpdf->cell(5,1, utf8_decode('acción humana en el ambiente.'),0,0,'C',0);


$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(2,16);
$fpdf->cell(5,1.5, utf8_decode(''),1,0,'C',0);;
$fpdf->SetXY(2,16.1);
$fpdf->cell(5,1, utf8_decode('4-Participa en acciones de conservación'),0,0,'C',0);
$fpdf->SetXY(2,16.4);
$fpdf->cell(5,1, utf8_decode('y mejoramiento del ambiente.'),0,0,'C',0);

$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(2,17.5);
$fpdf->cell(5,1.5, utf8_decode(''),1,0,'C',0);;
$fpdf->SetXY(2,17.6);
$fpdf->cell(5,1, utf8_decode('5-Elabora biografías de próceres '),0,0,'C',0);
$fpdf->SetXY(2,17.9);
$fpdf->cell(5,1, utf8_decode('de la independencia.'),0,0,'C',0);




$fpdf->SetFont('Arial','',8);
$fpdf->SetXY(7,10);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(5,9.8);
$fpdf->cell(6.4,1, utf8_decode('LOGRADO'),0,0,'C',0);
$fpdf->SetXY(5,10.2);
$fpdf->cell(6.4,1, utf8_decode('Y'),0,0,'C',0);
$fpdf->SetXY(5,10.6);
$fpdf->cell(6.4,1, utf8_decode('SUPERADO'),0,0,'C',0);

$fpdf->SetXY(7,11.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(5,11.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(7,14.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(5,14.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(7,13);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(5,13.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(7,16);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(5,16.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(7,17.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(5,17.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(9.1,10);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(6.8,9.8);
$fpdf->cell(6.4,1, utf8_decode('LOGRADO'),0,0,'C',0);
$fpdf->SetXY(6.8,10.2);
$fpdf->cell(6.4,1, utf8_decode('CON'),0,0,'C',0);
$fpdf->SetXY(6.8,10.6);
$fpdf->cell(6.4,1, utf8_decode('EXITO'),0,0,'C',0);

$fpdf->SetXY(9.1,11.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(6.8,11.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(9.1,14.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(6.8,14.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(9.1,13);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(6.8,13.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(9.1,16);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(6.8,16.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(9.1,17.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(6.8,17.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);


$fpdf->SetXY(11.2,10);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(9,9.8);
$fpdf->cell(6.4,1, utf8_decode('EN'),0,0,'C',0);
$fpdf->SetXY(9,10.2);
$fpdf->cell(6.4,1, utf8_decode('PROCESO DE'),0,0,'C',0);
$fpdf->SetXY(9,10.6);
$fpdf->cell(6.4,1, utf8_decode('LOGRARLO'),0,0,'C',0);

$fpdf->SetXY(11.2,11.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(9,11.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(11.2,14.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(9,14.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(11.2,13);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(9,13.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(11.2,16);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(9,16.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(11.2,17.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(9,17.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(13.3,10);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(11,9.8);
$fpdf->cell(6.4,1, utf8_decode('REQUIERE'),0,0,'C',0);
$fpdf->SetXY(11,10.2);
$fpdf->cell(6.4,1, utf8_decode('REFUERZO'),0,0,'C',0);

$fpdf->SetXY(13.3,11.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(11,11.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(13.3,14.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(11,14.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(13.3,13);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(11,13.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(13.3,16);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(11,16.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(13.3,17.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(11,17.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(15.4,10);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(13,9.8);
$fpdf->cell(6.4,1, utf8_decode('SIN'),0,0,'C',0);
$fpdf->SetXY(13,10.2);
$fpdf->cell(6.4,1, utf8_decode('LOGROS'),0,0,'C',0);

$fpdf->SetXY(15.4,11.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(13,11.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(15.4,14.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(13,14.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(15.4,13);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(13,13.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(15.4,16);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(13,16.1);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);

$fpdf->SetXY(15.4,17.5);
$fpdf->cell(2.1,1.5, utf8_decode(''),1,0,'C',0);
$fpdf->SetXY(13,17.6);
$fpdf->cell(6.4,1, utf8_decode('var'),0,0,'C',0);


$fpdf->SetXY(7,19.5);
$fpdf->cell(6.4,1, utf8_decode('Resumen Descriptivo'),0,0,'C',0);

$fpdf->SetXY(7,20);
$fpdf->cell(6.4,1, utf8_decode('Es un niño, que demuestra solidaridad y empatía con sus compañeros, en ocasiones cumple con las normas de convivencia social'),0,0,'C',0);
$fpdf->SetXY(7,20.5);
$fpdf->cell(6.4,1, utf8_decode('y de organización en la escuela, realiza sus tareas o actividades y de organización en la escuela, realiza sus tareas o actividades'),0,0,'C',0);

$fpdf->SetFont('Arial','B',8);
$fpdf->SetXY(0.5,21.5);
$fpdf->cell(6.4,1, utf8_decode('Recomendaciones'),0,0,'C',0);

$fpdf->SetFont('Arial','',8);
$fpdf->SetXY(6,22);
$fpdf->cell(6.4,1, utf8_decode('Debes practicar lectura diariamente, multiplicaciones de tres o más números por una y dos cifras divisiones de'),0,0,'C',0);

$fpdf->SetXY(7,23.5);
$fpdf->cell(1,1, utf8_decode('___________________'),0,1,'R',0);
$fpdf->SetXY(6.5,24);
$fpdf->cell(1,1, utf8_decode('Firma del Docente'),0,1,'R',0);

$fpdf->SetXY(16,23.5);
$fpdf->cell(1,1, utf8_decode('___________________'),0,1,'R',0);
$fpdf->SetXY(16,24);
$fpdf->cell(1,1, utf8_decode('Firma del Representante'),0,1,'R',0);

$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(9.8,24.5);
$fpdf->cell(1,1, utf8_decode('Dirección: Av. Los Jabillos, diagonal al Banco de Venezuela, Nº 4, El Cementerio-Caracas.'),0,0,'C',0);
$fpdf->SetXY(9.8,24.8);
$fpdf->cell(1,1, utf8_decode('Teléf. 0212-668-12-18 pág. Web. ebnconsuelonavas@gmail.com y ebnconsuelo@hotmail.com'),0,0,'C',0);

$fpdf->Output('I', 'Formato Boleta.pdf');

?>