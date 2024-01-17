<?php

    #preguntamos si traemos una varibale ID. Deberia de venir x el boton de modificar


        $item = "grado";
        #Busca coincidencias en la columna grado.  

        $valor = $_REQUEST['grado'];
        #Busca que sea igual a el grado que traiga la varible POST.

        $item2 = "seccion";
        $valor2 = $_REQUEST['seccion'];



        $alumnos = ControladorFormularios::ctrSeleccionarAula($item,$valor, $item2, $valor2);

        
?>



<br><br><br><br><br><br><br><br><br>

<center>
<div class="container-user"> 


	<table class="table-user">
		<thead>
		<tr>
			<th>Cédula</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Grado</th>
			<th>Seccion</th>
			<th>Nota</th>
			<th>representante</th>
		    <th>Ingreso</th>
			<th></th>
			<th></th>
		</tr>
		</thead>
	
		<tbody>

			<?php foreach ($alumnos as $key => $value): ?>

				<tr>
				
				<td><?php echo $value['id'];?></td>

				<td><?php echo $value['nombre'];?></td>

				<td><?php echo $value['apellido'];?></td>

				<td><?php echo $value['grado'];?></td>

				<td><?php echo $value['seccion'];?></td>

				<td><?php echo $value['nota'];?></td>

				<td><?php echo $value['representante'];?></td>

				<td><?php echo $value['FechaRegistro'];?></td>

				<td>
					<a class="btn btn-danger"  name="EditarEstu" href="index.php?action=VIS_editarestu&id=<?php echo $value["id"]; ?>">Editar</a>

				</td>

				<td>
					<a class="btn btn-danger"  name="DesincEstu" href="index.php?action=VIS_desincestu&id=<?php echo $value["id"]; ?>">Desincorporar</a>						
				</td>

			</tr>

				
			<?php endforeach ?>

		</tbody>

	</table>
</div>
</center>