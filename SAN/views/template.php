<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sistema automatizado de notas</title>
	<!-- archivos CSS -->
	<link rel="stylesheet" href="resources/css/css_san.css"> 
	<link rel="stylesheet" href="resources/css/c_plantilla.css">
	<link rel="stylesheet" href="resources/css/editar.css">
	<!----->
	
</head>
<body>
<header class="header">
		<div class="container">
		<div class="btn-menu">
		<div class="menu-logo"><img src="resources/img/colegio.jpeg" alt="Logo-colegio"></div>
		<!--	MENU DE NAVEGACION --------------->	
		<nav>
				<a href="index.php?action=VIS_inicio">Inicio</a>
				<a href="index.php?action=VIS_usuarios">Gestión de usuarios</a>
					<a href="index.php?action=VIS_plantilla">Plantilla estudiantil</a>
					<a href="index.php?action=VIS_buscar_au">Carga de notas</a>
					<a href="index.php?action=VIS_gene">Generar reportes</a>
					<a href="index.php?action=VIS_manuales">Manuales</a>
					<a href="index.php?action=VIS_acerca">Acerca de</a>
					<a href="index.php?action=VIS_salir">Salir</a>
			</nav>
		</div>
		</div>
	</header>
	
<section>

<?php
	
	#ISSET: isset() Determina si una variable está definida y no es URL.

			if (isset($_GET["action"])) {
				
				if($_GET["action"] == "VIS_inicio" || $_GET["action"] == "VIS_usuarios" || $_GET["action"] == "VIS_c_plantilla" 
					|| $_GET["action"] == "VIS_secciones" || $_GET["action"] == "VIS_plantilla" || $_GET["action"] == "VIS_acerca" 
					|| $_GET["action"] == "VIS_salir" || $_GET["action"] == "VIS_editar" || $_GET["action"] == "VIS_v_plantilla" 
					|| $_GET["action"] == "VIS_editarestu" || $_GET["action"] == "VIS_desincestu" 
					|| $_GET["action"] == "VIS_egresos" || $_GET["action"] == "VIS_c_nota" || $_GET["action"] == "VIS_buscar_au"
					|| $_GET["action"] == "VIS_cargarnota" || $_GET["action"] == "VIS_gene" || $_GET["action"] == "VIS_manuales"){  #Aqui se esta definiendo una lista blanca de url.

					include "modules/".$_GET["action"].".php";
				}else{

					include "modules/VIS_error.php";
				}
			}
	
?>	
</section>

</body>
</html>